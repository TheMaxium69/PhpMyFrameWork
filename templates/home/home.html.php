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
            <a href="#Template">Template</a>
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
        <p>Le frame work est fait en 3 parti <u>Les Controlleurs</u>, <u>Les Models</u> et <u>Les Template</u></p>
    </section>
    <section id="Controlleur">
        <h4>Les Controlleurs</h4>
        <p>
            Le Controlleurs est une class ou on instensi tout, il faut créer une méthode (exemple : <mark>index</mark>) qui sera appeler car le framework est fait pour appeler un controleur et une méthode de ce controleur
            <br> Exemple : <mark> index.php?controller=home&task=index </mark>
            <br> avec cette exemple on appeler le controller <mark>Home</mark> et la méthode <mark>index</mark>
            <br> Voici comment le code est réaliser
        </p>
        <p><img src="https://cdn.discordapp.com/attachments/446049284694081546/857605696417300480/unknown.png" alt="controlleur1" width="800px" class="d-inline-block align-text-top"></p>
        <p>
            on peut voir dans ce screen qu'on ce situe dans un Controlleur <mark>Home</mark> et qu'il ya une méthode <mark>index</mark> qui si on décortique le code, qui instantie des variable <mark>titreDePage</mark>, <mark>message</mark> et <mark>messageChange</mark>
            <br> avec la conditions d'après on verfi si il y a bien du contenue dans cette variable <mark>post</mark> (d'un formulaire qu'on vera dans la parti <u>Template</u>), si c'est bien le cas on met le contenue du <mark>post</mark> dans la variable <mark>messageChange</mark>
            <br> puis pour terminer on termine noter méthode avec cette ligne :
            <br> <mark>\Rendering::render("home/home", compact('message', 'messageChange', 'titreDeLaPage'));</mark>
            <br>la parti <mark>"home/home"</mark> nous donne ou ce situe le <u>Template</u> (Attention : bien respect la manière de créer les fichers <u>Template</u>)
            <br> et pour terminer dans <mark>compact()</mark> on vas mettre les variable qu'on veut donner au <u>Template</u>, ou dit plus clairement on va donner les variable qu'on veut récupere dans l'html
            <br> exemple : <mark>compact('message', 'messageChange', 'titreDeLaPage')</mark>
            <br> avec cette exemple on va transmettre les variable <mark>titreDePage</mark>, <mark>message</mark> et <mark>messageChange</mark>, et en y passant la variable <mark>titreDePage</mark>, vas automatique ce mettre dans le titre de la page
            <br> dernière petit chose on oublie pas de respecter les syntaxe et de bien mettre les ficher au bonne en droit avec la bonne majuscule
        </p>
        <p><img src="https://media.discordapp.net/attachments/446049284694081546/857610659368665098/unknown.png" alt="controlleur2" width="250px" class="d-inline-block align-text-top"></p>

    </section>
    <section id="Template">
        <h4>Les Template</h4>
        <p>le Template sera plus simple que <u>le controlleur</u> on va reprendre comme pour <u>le controlleur</u> notre exemple du haut</p>
        <p><img src="https://cdn.discordapp.com/attachments/446049284694081546/857612139136942080/unknown.png" alt="template1" width="800px" class="d-inline-block align-text-top"></p>
        <p>
            grace a la méthode <mark>compact()</mark> que nous avons mis dans notre <u>controlleur</u> on peut récupérer nos variable <mark>message</mark> et <mark>messageChange</mark> et grace a un simple <mark>echo</mark> on a pus les afficher
            <br>en desous nous avons un simple formulaire en <mark>post</mark> qui redirige vers <mark>index.php?controller=home&task=index</mark> ce qui nous permet de refaire appel a la méthode <mark>index</mark> du <u>controlleur</u> <mark>Home</mark> ce qui nous a permis d'envoyé dans notre <u>controlleur</u> la variable <mark>post</mark> et dans l'exemple ça sera <mark>$_POST['messageChange']</mark>
            <br>encore une fois on oublie pas de respecter les syntaxe et de bien mettre les ficher au bonne en droit avec la bonne terminaison de ficher <mark>.html.php</mark><br>
        </p>
        <p><img src="https://cdn.discordapp.com/attachments/446049284694081546/857608951750066176/unknown.png" alt="template2" width="300px" class="d-inline-block align-text-top"></p>
    </section>
    <section id="Model">
        <h4>Les Models</h4>
        <p>
            Alors les models surment la parti la plus compliqué a comprendre d'ailleur pour ça on va changez d'exemple avec un Garage
            <br>pour commencer il faut changez la class <u>controlleur</u> qu'on a applez <mark>Garage</mark>
        </p>
        <p><img src="https://media.discordapp.net/attachments/446049284694081546/857624091103330334/unknown.png" alt="model1" width="500px" class="d-inline-block align-text-top"></p>
        <p>
            grace a l'ajout de <mark>extends Controller</mark> ça nous permet de faire comprendre au framwork qu'on a vas vouloir un model
            <br>et juste en dessous il faut mettre le nom de notre model <mark>protected $modelName = \Model\Garage::class;</mark> grace a cette ligne on donne la class model a notre <u>controlleur</u>
            <br>et evidement on respect le nom avec la majuscule et l'endroit du ficher (tout les model dans <mark>../core/Model/</mark>)
        </p>
        <p><img src="https://cdn.discordapp.com/attachments/446049284694081546/857626638661845052/unknown.png" alt="model1" width="250px" class="d-inline-block align-text-top"></p>
        <p>
            pas terminer
        </p>
    </section>
    <section id="Other">
        <h4>Autre</h4>
        <p>pour terminez on oublie pas de bien connecter sa base de donné dans le ficher <mark>../core/Database.php</mark> et on remplie ces information</p>
        <p><img src="https://cdn.discordapp.com/attachments/446049284694081546/857615252744699904/unknown.png" alt="other1" width="800px" class="d-inline-block align-text-top"></p>
        <p>
            <mark>localhost</mark> : Le lien de votre base de donnée
            <br><mark>ExempleDB</mark> : Le nom de votre base de donnée
            <br><mark>ExempleUsername</mark> : Le username de votre base de donnée
            <br><mark>ExemplePassword</mark> : Le password de votre base de donnée
        </p>
    </section>
</main>
