<h2 id="title"><?php echo $message ?></h2>
<p id="change"><?php echo $messageChange ?></p>

<form action="index.php?controller=home&task=index" method="post">
        <div>
            <input type="text" class="form-control" name="messageChange" placeholder="Message">

            <input type="submit" class="btn btn-outline-light" value="Changez le message">
        </div>
</form>

<main>
    <h3>Documentation</h3>
    <h4>Sommaire</h4>
    <ul>
        <li>
            <a href="#Base">Base</a>
        </li>
        <li>
            <a href="#Controlleur">Controlleur</a>
        </li>
        <li>
            <a href="#Layout">Layout</a>
        </li>
        <li>
            <a href="#Model">Model</a>
        </li>
        <li>
            <a href="#Other">Autre</a>
        </li>
    </ul>
    <section id="Base">
        <h4>Les Bases</h4>
        <p>Le frame work est fait en 3 parti <u>Les Controlleurs</u>, <u>Les Models</u> et <u>Les Layout</u></p>
    </section>
    <section id="Controlleur">
        <h4>Les Controlleurs</h4>
        <p>Le Controlleurs est une class ou on instensi tout, il faut créer une méthode (exemple : <mark>index</mark>) qui sera appeler car le framework est fait pour appeler un controleur et une méthode de ce controleur <br> Exemple : <mark> index.php?controller=home&task=index </mark> <br> avec cette exemple on appeler le controller <mark>Home</mark> et la méthode <mark>index</mark> <br> Voici comment le code est réaliser</p>
        <p><img src="https://cdn.discordapp.com/attachments/446049284694081546/857605696417300480/unknown.png" alt="controlleur1" width="800px" class="d-inline-block align-text-top"></p>
        <p>on peut voir dans ce screen qu'on ce situe dans un Controlleur <mark>Home</mark> et qu'il ya une méthode <mark>index</mark> qui si on décortique le code, qui instantie des variable <mark>titreDePage</mark>, <mark>message</mark> et <mark>messageChange</mark> <br> avec la conditions d'après on verfi si il y a bien du contenue dans cette variable <mark>post</mark> (d'un formulaire qu'on vera dans la parti <u>layout</u>), si c'est bien le cas on met le contenue du <mark>post</mark> dans la variable <mark>messageChange</mark> <br> puis pour terminer on termine noter méthode avec cette ligne : <br> <mark>\Rendering::render("home/home", compact('message', 'messageChange', 'titreDeLaPage'));</mark><br>la parti <mark>"home/home"</mark> nous donne ou ce situe le <u>Layout</u> (Attention : bien respect la manière de créer les fichers <u>Layout</u>) <br> et pour terminer dans <mark>compact()</mark> on vas mettre les variable qu'on veut donner au <u>Layout</u>, ou dit plus clairement on va donner les variable qu'on veut récupere dans l'html <br> exemple : <mark>compact('message', 'messageChange', 'titreDeLaPage')</mark><br> avec cette exemple on va transmettre les variable <mark>titreDePage</mark>, <mark>message</mark> et <mark>messageChange</mark>, et en y passant la variable <mark>titreDePage</mark>, vas automatique ce mettre dans le titre de la page <br> dernière petit chose on oublie pas de respecter les syntaxe et de bien mettre les ficher au bonne en droit avec la bonne majuscule</p>
        <p><img src="https://media.discordapp.net/attachments/446049284694081546/857610659368665098/unknown.png" alt="controlleur2" width="300px" class="d-inline-block align-text-top"></p>

    </section>
    <section id="Layout">
        <h4>Les Layout</h4>
        <p>ziojeizabeiza</p>
        <p><img src="https://cdn.discordapp.com/attachments/446049284694081546/857608951750066176/unknown.png" alt="layout1" width="300px" class="d-inline-block align-text-top"></p>

    </section>
    <section id="Model">
        <h4>Les Models</h4>
        <p>ziojeizabeiza</p>
    </section>
    <section id="Other">
        <h4>Autre</h4>
        <p>ziojeizabeiza</p>
    </section>
</main>

<style>
    h2#title{
        margin-top: 10px;
    }
    p#change{
        margin-top: 10px;
    }
    main{
        background-color: white;
        color: black;
        margin-left: 10%;
        margin-right: 10%;
        margin-top: 30px;
        padding: 20px;
        border-radius: 14px;
    }
    main p{
        text-align: center;
    }
    main h3{
        text-decoration: underline;
    }
    main h4{
        text-align: center
    }
    main ul{
        margin-left: 100px;
    }
    main a{
        text-decoration:none;
        color: black;
    }


</style>