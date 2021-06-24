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
            <a href="#Model">Model</a>
        </li>
        <li>
            <a href="#Layout">Layout</a>
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
        <p>Le Controlleurs est une class ou on instensi tout il faut créer une méthode 'nameDeVotreChoix' qui sera appeler car le frame est fait pour appeler un controleur et une méthode de ce controleur <br> Exemple : <mark> index.php?controller=garage&task=index </mark> <br> avec cette exemple on appeler le controller 'Garage' et la méthode 'index'</p>
    </section>
    <section id="Model">
        <h4>Les Models</h4>
        <p>ziojeizabeiza</p>
    </section>
    <section id="Layout">
        <h4>Les Layout</h4>
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