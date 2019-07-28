# kubernetes-deployment
This is my college project, a kubernetes deployment for deploying php and sql based web applications.
Prerequisites:
Kubernetes cluster.
Kubernetes controller with kubectl.

Steps to deploy this project to Kubernetes
1. Clone this repository.
2. Change the contents of the www folder to whatever php based web applications you need.
3. kubectl apply all the containing yaml folders.

Alternately simply run the inculded init.sh script which will check the requirements and deploy the containers.

This will spin up an ingress controller, nginx pods, php pods and sql pods. 
All of these pods have been configured to talk to each other.
The pods are currently set to run 2 replicas of each.
This can be changed by simply changing the humber under replica: found under the spc: sub heading in the respective yaml for the deployment.

In order to find the IP of the ingress controller after deployment, run the command kubectl describe ing.
It takes approx 10 minutes for the IP to be provisioned after deployement.

The contents of the www folder should be setup as their own Git repo, and a link inserted to the 
nginx-deployment.yaml and php-fpm-deployment.yaml files, as this will then be where the deployment will pull
files from whenever they are restarted.

Included scripts:
1. init.sh - checks that the system is connected and ready to deploy, before deploying all yaml files to the cluster
2. restart.sh - restarts the nginx and php containers. do this whenever you wish to update the web files
3. gitcommit.sh - allows for quicker and easier git commits. 

