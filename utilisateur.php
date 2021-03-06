<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>User</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="main.js"></script>
    <?php require('global/template-components/head_general.php'); ?>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"
        crossorigin="anonymous">
</head>

<body>
    <?php require('global/template-components/header.php'); ?>

    <div class="app-dashboard-body off-canvas-wrapper">

        <div id="app-dashboard-sidebar" class="app-dashboard-sidebar position-left off-canvas off-canvas-absolute reveal-for-medium"
            data-off-canvas style="padding-top: 100px;">
            <div class="app-dashboard-sidebar-title-area">
                <div class="app-dashboard-close-sidebar">
                    <!-- <h3 class="app-dashboard-sidebar-block-title">GlobeDreamers</h3> -->
                    <!-- Close button -->
                    <button id="close-sidebar" data-app-dashboard-toggle-shrink class="app-dashboard-sidebar-close-button show-for-medium"
                        aria-label="Close menu" type="button">
                        <span aria-hidden="true"><a href="#"><i class="large fa fa-angle-double-left"></i></a></span>
                    </button>
                </div>
                <div class="app-dashboard-open-sidebar">
                    <button id="open-sidebar" data-app-dashboard-toggle-shrink class="app-dashboard-open-sidebar-button show-for-medium"
                        aria-label="open menu" type="button">
                        <span aria-hidden="true"><a href="#"><i class="large fa fa-angle-double-right"></i></a></span>
                    </button>
                </div>
            </div>
            <div class="app-dashboard-sidebar-inner">
                <ul class="menu vertical">
                    <li><a href="dashboard.php">
                            <i class="large fa fa-chart-line"></i><span class="app-dashboard-sidebar-text">Dashboard</span>
                        </a></li>
                    <li><a href="utilisateur.php" class="is-active">
                            <i class="large fa fa-user"></i><span class="app-dashboard-sidebar-text">Utilisateur</span>
                        </a></li>
                    <li><a href="entreprise.php">
                            <i class="large fa fa-industry"></i><span class="app-dashboard-sidebar-text">Entreprise</span>
                        </a></li>
                    <li><a href="projet-dashboard.php">
                            <i class="large fa fa-table"></i><span class="app-dashboard-sidebar-text">Projets</span>
                        </a></li>
                    <li><a href="carnet-projet.php">
                            <i class="large fa fa-magic"></i><span class="app-dashboard-sidebar-text">Carnet Projet</span>
                        </a></li>
                </ul>
            </div>
        </div>

        <div class="app-dashboard-body-content off-canvas-content" data-off-canvas-content id="user-main">
            <div class="row">
                <div class="columns large-4">
                    <div class="card card-user">
                        <div class="image">
                            <img src="img/background.jpg" alt="..." />
                        </div>
                        <div class="content">
                            <div class="author">
                                <img class="avatar border-white" id="user-avatar" src="img/faces/face-2.png" alt="..." />
                                <div class="row">
                                    <div class="columns">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="browse-button margin-1">
                                                    <span class="browse-button-text">
                                                        <i class="fa fa-folder-open"></i> Chercher
                                                    </span>
                                                    <input id="avatarField" type="file" accept=".jpg,.png" name="attachment" />

                                                </div>
                                                <div class="cancel-button">
                                                    <button type="button" class="clear-button margin-1" style="display:none;"><i class="fas fa-times"></i>Supprimer</button>
                                                </div>
                                                <input type="text" class="form-control filename margin-1" disabled="disabled"
                                                    placeholder="Please click on Chercher button and select a image file">
                                                <div class="input-group-btn margin-1">
                                                    <button class="upload-button " type="button">
                                                        <i class="fa fa-upload"></i>
                                                        Mise en ligne
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h4 class="title">Globe Dreamers<br />
                                    <a href="#"><small>@globedreamersFrance</small></a>
                                </h4>
                            </div>
                            <p class="description text-center">
                                "This is Spatartttttt <br>
                                Créer l'opportunité de voyager pour impacter positivement le monde ! <br>
                                Salut tout le monde"
                            </p>
                        </div>
                        <hr>
                        <div class="text-center">
                            <div class="row">
                                <div class="columns large-4">
                                    <h5>5<br /><small>Projets</small></h5>
                                </div>
                                <div class="columns large-4">
                                    <h5>752 €<br /><small>Budget</small></h5>
                                </div>
                                <div class="columns large-4">
                                    <h5>246 €<br /><small>Donatation</small></h5>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="header">
                            <h4 class="title">Mise enligne votre passport</h4>
                        </div>
                        <div class="content">
                            <ul class="list-unstyled team-members">
                                <li>
                                    <div class="row">
                                        <form action="post">
                                            <input type="file" name="fileupload" value="fileupload" id="fileupload">
                                            <label for="fileupload"> Choix la photo de votre passport</label>
                                            <button class="btn-pass">Mise à jour</button>
                                        </form>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>

                    <div class="card">
                        <div class="header">
                            <h4 class="title">Reseaux Social</h4>
                        </div>
                        <div class="content">
                            <ul class="list-unstyled team-members">
                                <li>
                                    <div class="row">
                                        <div class="columns large-3">
                                            <div class="avatar">
                                                <img src="img/faces/face-0.jpg" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                                            </div>
                                        </div>
                                        <div class="columns large-9" style="padding-top : 5px;">
                                            <input type="text" class="form-control border-input" placeholder="City"
                                                value="instagram">
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="columns large-3">
                                            <div class="avatar">
                                                <img src="img/faces/facebook.png" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                                            </div>
                                        </div>
                                        <div class="columns large-9" style="padding-top : 5px;">
                                            <input type="text" class="form-control border-input" placeholder="City"
                                                value="facebook">
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="columns large-3">
                                            <div class="avatar">
                                                <img src="img/faces/twitter.png" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                                            </div>
                                        </div>
                                        <div class="columns large-9" style="padding-top : 5px;">
                                            <input type="text" class="form-control border-input" placeholder="City"
                                                value="twitter">
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="columns large-3">
                                            <div class="avatar">
                                                <img src="img/faces/LinkedIn.png" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                                            </div>
                                        </div>
                                        <div class="columns large-9" style="padding-top : 5px;">
                                            <input type="text" class="form-control border-input" placeholder="City"
                                                value="linkedin">
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="columns large-3">
                                            <div class="avatar">
                                                <img src="img/faces/youtube.png" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                                            </div>
                                        </div>
                                        <div class="columns large-9" style="padding-top : 5px;">
                                            <input type="text" class="form-control border-input" placeholder="City"
                                                value="youtube">
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>



                </div>
                <div class="columns large-8">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Modifier Profile</h4>
                        </div>
                        <div class="content">
                            <form>
                                <div class="row">
                                    <!--
                                    <div class="columns large-4">
                                        <div class="form-group">
                                            <label>Société</label>
                                            <input type="text" class="form-control border-input" disabled placeholder="Company" value="GlobeDreamers">
                                        </div>
                                    </div>
-->
                                    <!--
                                    <div class="columns large-4">
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input type="text" class="form-control border-input" placeholder="Username"
                                                value="GlobeDreamers">
                                        </div>
                                    </div>
-->
                                    <div class="columns large-4">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email addresse</label>
                                            <input type="email" class="form-control border-input" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="columns large-4">
                                        <div class="form-group">
                                            <label>Genre</label>
                                            <input type="radio" name="gender" value="male"> Male &nbsp;
                                            <input type="radio" name="gender" value="female"> Female
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="columns large-6">
                                        <div class="form-group">
                                            <label>Nom</label>
                                            <input type="text" class="form-control border-input" placeholder="Company"
                                                value="Globe">
                                        </div>
                                    </div>
                                    <div class="columns large-6">
                                        <div class="form-group">
                                            <label>Prénom</label>
                                            <input type="text" class="form-control border-input" placeholder="Last Name"
                                                value="Dreamers">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="columns large-12">
                                        <div class="form-group">
                                            <label>Addresse</label>
                                            <input type="text" class="form-control border-input" placeholder="Home Address"
                                                value="Paris, France">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="columns large-4">
                                        <div class="form-group">
                                            <label>Date de Naissance</label>
                                            <input type="number" class="form-control border-input" placeholder="Date de Naissance">
                                        </div>
                                    </div>
                                    <div class="columns large-4">
                                        <div class="form-group">
                                            <label>Numero de Tel</label>
                                            <input type="number" class="form-control border-input" placeholder="Numero de Tel">
                                        </div>
                                    </div>
                                    <div class="columns large-4">
                                        <div class="form-group">
                                            <label>ID skype</label>
                                            <input type="text" class="form-control border-input" placeholder="ID skype">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="columns large-12">
                                        <div class="form-group">
                                            <label>Bio</label>
                                            <textarea rows="5" class="form-control border-input" placeholder="Here can be your description"
                                                value="Mike">GlobeDreamers est une plateforme vous permettant de financer et promouvoir vos projets de voyage humanisant ; à travers la mise en relation avec des donateurs, sponsors & associations en accord avec vos valeurs</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="create-project-button-splash">Mise à jour
                                        Profile</button>
                                </div>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                    <div class="card">
                        <div class="content">
                            <div class="container-fluid">

                                <form>
                                    <div class="row">
                                        <div class="columns large-8">
                                            <div class="form-group">
                                                <h4 for=""><i class="fas fa-credit-card"></i> Payment methods</h4>
                                            </div>
                                        </div>
                                        <div class="columns large-4">
                                            <div class="form-group">
                                                <i class="fab fa-cc-visa fa-4x"></i>
                                                <i class="fab fa-cc-mastercard fa-4x"></i>
                                                <i class="fab fa-cc-amex fa-4x"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="columns large-12">
                                            <div class="form-group">
                                                <label>RIB Banque</label>
                                                <input type="text" class="form-control border-input" placeholder="RIB Bancaire"
                                                    value="" minlength="8">
                                            </div>
                                        </div>
                                        <div class="columns large-12">
                                            <div class="form-group">
                                                <label>Card Numero</label>
                                                <input type="text" class="form-control border-input" placeholder="Card Numero"
                                                    value="" minlength="8">
                                            </div>
                                        </div>
                                        <div class="columns large-6">
                                            <div class="form-group">
                                                <label>Expiration (MM/YY)</label>
                                                <input type="text" class="form-control border-input" placeholder="(MM/YY)"
                                                    value="">
                                            </div>
                                        </div>
                                        <div class="columns large-6">
                                            <div class="form-group">
                                                <label>CVV (3 digits)</label>
                                                <input type="text" class="form-control border-input" placeholder="***"
                                                    value="">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="columns large-3">
                                            <div class="text-center">
                                                <button type="submit" class="create-project-button-splash">Enregistrer</button>
                                            </div>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>


                    <div class="card">
                        <div class="content">
                            <div class="container-fluid">

                                <form>
                                    <div class="row">
                                        <div class="columns large-8">
                                            <div class="form-group">
                                                <h4 for=""><i class="fas fa-key"></i> Changer Mot de Pass</h4>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="columns large-12">
                                            <div class="form-group">
                                                <label>L'ancien mots de pass</label>
                                                <input type="password" class="form-control border-input" placeholder="L'ancien Mot de pass"
                                                    value="" minlength="8">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="columns large-12">
                                            <div class="form-group">
                                                <label>Mots de pass</label>
                                                <input type="password" class="form-control border-input" placeholder="Mot de pass actuel"
                                                    value="" minlength="8">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="columns large-12">
                                            <div class="form-group">
                                                <label>Changer mot de Pass</label>
                                                <input type="password" class="form-control border-input" placeholder="Tapper mots de pass que vous voulez changer"
                                                    value="" minlength="8">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="columns large-3">
                                            <div class="text-center">
                                                <button type="submit" class="create-project-button-splash">Mise à jours</button>
                                            </div>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </div>

    <?php require('global/template-components/footer.php');?>
    <?php require('global/template-components/scripts_index.php'); ?>
    <script>
        $(document).foundation();
        // DISPLAY IMAGE FILENAME
        //actions happening when the button is clicked
        $('.clear-button').click(function () {
            $('.filename').val("");
            $('.clear-button').hide();
            $('.browse-button input:file').val("");
            $(".browse-button-text").html(
                '<i class="fa fa-folder-open"></i><input id="avatarField" type="file" accept=".jpg,.png" name="attachment" /> Chercher'
            );
        });
    </script>
    <script src="global/tinymce/vendor/jquery.js"></script>
    <script src="global/tinymce/vendor/what-input.js"></script>
    <script src="global/tinymce/vendor/foundation.js"></script>
    <script src="global/tinymce/app.js"></script>
</body>

</html>