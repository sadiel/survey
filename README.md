ST
========================


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

There you can find routes like:

    http://localhost/answer/list
    http://localhost/answer/{id}

You can testing the POST request with CURL

    curl -v -H "Content-Type: application/json" -X POST -d '{"answer":{"id_questionnaire": 1, "id_question": 1, "id_response":1, "value":"yes", "id_user":1}}' http://localhost/answer

To see a the API documentation, access the following page:

    http://localhost/web/api/doc/
    
It use the `NelmioApiDocBundle` and you can see an example at https://github.com/nelmio/NelmioApiDocBundle


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


