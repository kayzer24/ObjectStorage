# Object storage
demonstration de l'utilisation de Minio pour stocker des image sur un server object aws s3

## Initialisation du projet

### Installation des images docker
```bash
docker-compose up -d
```

### Installation des dependances composer
```bash
composer install
```

### Création des migration symfony
```bash
symfony console make:migration
```

### Migrer les donnée avec doctrine
```bash
symfony serve d:m:m
```

### Lancement du server symfony
```bash
symfony serve -d
```

### Configuration de l'interface de Minio:
L'accès a l'interface Minio se fait depuis l'url: 
* http://127.0.0.1:9000
* se logger avec les credentials définis dans les parametres du projet docker
* créer un nouveau bucket nommé "fichier"
* mettre l' Access Policy du bucket a public (vois la documentation pour plus de securité)

 
 Maintenant toute les images crées depuis l'entité fichier dans le projet symfony seront automatiquement enregistrées dans le bucket fichier.




