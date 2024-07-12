# VIKSUv1.0



## Requirements
- Working installation of [Docker](https://docs.docker.com/engine/install/)


## Running procedure
```bash
# Clone source code
git clone https://gitlab.labranet.jamk.fi/wimma-lab-2023/overflow/VIKSUv1.0.git

# Running docker containers
cd VIKSUv1.0/
docker compose up -d

# See running containers
docker ps

# Load initial dumped data
docker exec -i <mysqlcontainer-id> sh -c 'exec mysql -uroot -p"$MYSQL_ROOT_PASSWORD"' < viksu-dump.sql

# Stop the containers [Note: current working directory should be VIKSUv1.0]
docker compose down
```


## Useful commands
```bash
# To create full database dump from running mysql container
docker exec <mysql-container-id> sh -c 'exec mysqldump --all-databases -uroot -p"$MYSQL_ROOT_PASSWORD"' > viksu-dump.sql

# To restore data from database dump into running mysql container
docker exec -i <mysqlcontainer-id> sh -c 'exec mysql -uroot -p"$MYSQL_ROOT_PASSWORD"' < viksu-dump.sql
```