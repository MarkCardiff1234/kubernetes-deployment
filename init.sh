echo "#################################################################################################"
echo "#                                                                                               #"
echo "#   This script will deploy your web/php app to Kubernetes after checking some requirements.    #"
echo "#                Please ensure you have read the README file included.                          #"
echo "#                                                                                               #"
echo "#################################################################################################"
# check that kubectl is installed, this helps check that the machine is actually connected toa  Kubernetes cluster
command -v kubectl >/dev/null 2>&1 || { echo >&2 "You require kubectl but it's not installed.  Aborting."; exit 1; }

#check isf user has installed the base network for the cluster, if not offer Flannel
read -p "To deploy to Kubernetes you require a cluster with networking enabled, do you wish to install Flannel for networking now? " -n 1 -r
echo
if [[ $REPLY =~ ^[Yy]$ ]]
then
     sudo kubectl apply -f https://raw.githubusercontent.com/coreos/flannel/master/Documentation/kube-flannel.yml
fi

# instruct user on how this repo works
echo "The sample files within the www folder can be edited before applying these yaml files to deploy any pages you wish."

echo "These files should be pushed to a Github repo as this is where they will be pulled from by the deployment"

echo "Then edit the necessary yamls(see README) to point to the appropriate repo."

echo "In this way you can change the files after deployment and simply recreate the pods to update them"

#check user is ready to deploy, if not abort
read -p "Have you created all necessary html/php files and placed them in the www folder? " -n 1 -r
echo
if [[ $REPLY =~ ^[Yy]$ ]]
then
    kubectl apply -f .
    echo "successfully deployed to Kubernetes"
    echo "Public IP of the ingress can be found by running kubectl describe ing | grep Address"
    echo "See below for IP, if not provisioned yet try again later"
kubectl describe ing | grep Address


else
    echo "aborting"
fi
