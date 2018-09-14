PHP Hello is a fun little exercise in automating the deployment of a PHP webapp using docker-compose.

*DEPENDENCIES:*

- [awscli](https://aws.amazon.com/cli/)

## Deploy

1.) Deploy the Cloudformation template

`cd cfn && ./deploy.sh` 

2.) Test

`curl $(aws elbv2 describe-load-balancers --names php-hello | jq -r '.LoadBalancers[0].DNSName')`
