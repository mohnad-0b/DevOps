Build
```docker
docker build . -t <image_name>  
```
run in port 80
```docker
docker run --name <container_name> -p 80:80 -d <image_name> 
```
or use ansible-playbook 
```
ansible-playbook ansible-playbook.yml
```
