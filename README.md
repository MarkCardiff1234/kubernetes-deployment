# kubernetes-deployment
This is my college project, a kubernetes deployment for deploying php and sql based web applications.
Prerequisites:
Kubernetes cluster.
Kubernetes controller with kubectl.

1. Clone this repository.
2. Change the contents of the www folder to whatever php based web applications you need.
3. kubectl apply all the containing yaml folders.

This will spin up an ingress controller, nginx pods, php pods and sql pods. 
All of these pods have been configured to talk to each other.

