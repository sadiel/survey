Gamma Survey Test2
========================

Welcome to the Gamma Survey Test2. This document contains information on how to download and start using it.

Question 
--------

L'association française de réputation des parisiens émigrés dans le monde a besoin de statistiques sur la réputation de ses membres.
Afin de pouvoir lancer sa campagne de communication 'Un parisien, c'est bien' au budget pantagruellique, vous êtes mandatés pour definir une API REST exposant l'ensemble des sondages effectués à travers le monde. Cette API permet à différentes applications de créer une interface pour tout ces questionnaires et de renvoyer les réponses de chaque participant pour que vous puissiez les stocker.
Il vous faudra donc modéliser l'ensemble des questionnaires dont les templates sont joints dans les fichier attachés (*.txt) dans le système de gestion de donnée de votre choix, avec les language, outil et/ou framework de votre choix, et les exposer au travers de cette API pour consultation et modification. Vous n'aurez pas besoin de dessiner d'interface ou d'afficher autre chose que des réponses HTTP (JSON).
En bonus, vous pourrez proposer une architecture et/ou un outil qui permettrai de connaître en temps réel, les résultats du sondage, et de faire un 'scoring' de la réputation ainsi obtenue en fonction d'une ponderation en point de chaque réponse et de l'importance de chaque question. Cette architecture devra être pensée et dimensionner jusqu'à pouvoir atteindre plus de 1 milliard de répondant dans le monde.

Answer
======

Note that you **must** have git installed and be able to execute the `git` command to execute this script.

See the requirements to install Symfony2 like APC, disable short_tags, etc.


1) Download
--------------------------------

### Clone the git Repository

Run the following commands:

    git clone https://github.com/sadiel/survey.git

2) Installation
---------------

### a) Install the Vendor Libraries

Run the following:

    php bin/vendors install
    
### b) Create Database

Execute the following:

    php app/console doctrine:database:create
    

### c) Access the Application via the Browser

You're now ready to use the application. Note that it is **incomplete**.

To see a the API documentation, access the following page:

    http://localhost/web/api/doc/

There you can find routes like:

    http://localhost/answer/list
    http://localhost/answer/{id}

You can testing the POST request with CURL

    curl -v -H "Content-Type: application/json" -X POST -d '{"answer":{"id_questionnaire": 1, "id_question": 1, "id_response":1, "value":"yes", "id_user":1}}' http://localhost/answer

Description
-----------

Database:

    Table         Fields
    Questionnaire (id, name)
    Question      (id, text, id_questionnaire, parent_id, depend_id)
    Response      (id, text, id_question, kind)
    
    Answer        (id, id_questionanaire, id_response, value, id_user)

The tables Questionnaire, Question and Response describe the Surveys. The table answer describe each answer

Bundles:

* **FOSRest**
* **JMSSerializerBundle** 
* **NelmioApiDocBundle** 


TODO:
-----

* Add Doctrine relations between the Table Answer and the other tables.
* Add depend_id One-To-Many Self relation (in order to link questions that depend on another) in Question Table
* Add functions to create and modify the Survey, not the Answers because it is just incomplete.
* Finish the API Documentation.
* Create a layer of Cache for the Answer in order to increase the speed access, even if Symfony2 comes with cache system.
* Optimize the SQL queries. 


