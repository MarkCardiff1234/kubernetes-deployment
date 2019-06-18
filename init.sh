echo "#################################################################################################"
echo "#                                                                                               #"
echo "#   This script will deploy your web/php app to Kubernetes after checking some requirements.    #"
echo "#                                                                                               #"
echo "#################################################################################################"
command -v kubectl >/dev/null 2>&1 || { echo >&2 "You require kubectl but it's not installed.  Aborting."; exit 1; }

read -p "Have you created all necesary html/php files and placed them in the www folder? " -n 1 -r
echo    # (optional) move to a new line
if [[ $REPLY =~ ^[Yy]$ ]]
then
    echo "kubectl apply stuff"
fi
