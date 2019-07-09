echo "#################################################################################################"
echo "#                                                                                               #"
echo "#   This script will deploy your web/php app to Kubernetes after checking some requirements.    #"
echo "#                                                                                               #"
echo "#################################################################################################"
command -v kubectl >/dev/null 2>&1 || { echo >&2 "You require kubectl but it's not installed.  Aborting."; exit 1; }

echo "The sample files within the www folder can be editted before applying these yaml files to deploy any pages you wish."

echo "These files should be pushed to a Github repo as this is where they will be pulled from by the deployment"

echo "Then edit the necessary yamls to point to the appropriate repo."

echo "In this way you can change the files after deployment and simply recreate the pods to update them"

read -p "Have you created all necesary html/php files and placed them in the www folder? " -n 1 -r
echo    # (optional) move to a new line
if [[ $REPLY =~ ^[Yy]$ ]]
then
    kubectl apply -f .
fi
