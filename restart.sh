kubectl delete -f php-fpm-deployment.yaml 
kubectl delete -f nginx-deployment.yaml 
sleep 5
kubectl apply -f php-fpm-deployment.yaml 
kubectl apply -f nginx-deployment.yaml 
