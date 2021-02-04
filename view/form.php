<?php
include '../controller/controller.php';
include 'header.php';



?>

<?php
if (isset($_POST['submit']) && count($formError) === 0) {
?>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      bonjour <?= $firstname ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

      </div>
    </div>
  </div>
</div>
    
                   <p> bonjour <?= $firstname ?></p>
                


<?php
} else {
?>
    <div class="container bg-light text-warning">
        <form method="POST" action="#" class="row shadow-lg p-1 mb-2 bg-white rounded">

            <div class="col-12 text-success text-center" id="title"><strong>
                    <h2>merci de renseigner le formulaire de contact &#128578; </h2>
                </strong>
            </div>
            <div class="col-6 ">
                <div>
                    <label for="firstname">prénom</label>
                    <input type="text" class="form-control" name="firstname" id="firstname" placeholder="SIMPSON" value="<?= isset($_POST['firstname']) ? $_POST['firstname'] : '' ?>">
                    <?php
                    if (isset($formError['firstname'])) {
                    ?>
                        <span class="alert alert-danger" role="alert">
                            <?= $formError['firstname'] ?>
                        </span>
                    <?php
                    }
                    ?>
                </div>
                <div>
                    <label for="lastname">nom</label>
                    <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Homer" value="<?= isset($_POST['lastname']) ? $_POST['lastname'] : '' ?>">
                    <?php
                    if (isset($formError['lastname'])) {
                    ?>
                        <span class="alert alert-danger" role="alert">
                            <?= $formError['lastname'] ?>
                        </span>
                    <?php
                    }
                    ?>
                </div>
                <div>
                    <label for="naissance">date de naissance</label>
                    <input type="date" class="form-control" name="naissance" id="naissance" required>
                </div>
                <div>
                    <label for="country">pays de naissance</label>
                    <input type="text" class="form-control" name="country" id="country" placeholder="France" value="<?= isset($_POST['country']) ? $_POST['country'] : '' ?>">
                    <?php
                    if (isset($formError['country'])) {
                    ?>
                        <span class="alert alert-danger" role="alert">
                            <?= $formError['country'] ?>
                        </span>
                    <?php
                    }
                    ?>
                </div>
                <div>
                    <label for="mail">email</label>
                    <input type="text" class="form-control" name="mail" id="mail" value="<?= isset($_POST['mail']) ? $_POST['mail'] : '' ?>">
                    <?php
                    if (isset($formError['mail'])) {
                    ?>
                        <span class="alert alert-danger" role="alert">
                            <?= $formError['mail'] ?>
                        </span>
                    <?php
                    }
                    ?>
                </div>
                <div>
                    <label for="phone">téléphone</label>
                    <input type="text" class="form-control" name="phone" id="phone" value="<?= isset($_POST['phone']) ? $_POST['phone'] : '' ?>">
                    <?php
                    if (isset($formError['phone'])) {
                    ?>
                        <span class="alert alert-danger" role="alert">
                            <?= $formError['phone'] ?>
                        </span>
                    <?php
                    }
                    ?>
                </div>
                <div>
                    <label for="exp">Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ?</label>
                    <input type="text" class="form-control" name="exp" id="hack" value="<?= isset($_POST['exp']) ? $_POST['exp'] : '' ?>">
                    <?php
                    if (isset($formError['exp'])) {
                    ?>
                        <span class="alert alert-danger" role="alert">
                            <?= $formError['exp'] ?>
                        </span>
                    <?php
                    }
                    ?>
                </div>

            </div>
            <div class="col-6">
                <div>
                    <label for="degree">diplôme</label><br>
                    <select class="form-control form-control-sm" name="degree" required>
                        <option>sans</option>
                        <option>bac</option>
                        <option>bac +2</option>
                        <option>bac +3 ou supérieur</option>
                    </select><br>
                </div>
                <div>
                    <label for="numberPo">numéro pôle emploi</label>
                    <input type="text" class="form-control" name="numberPo" id="numberPo" value="<?= isset($_POST['numberPo']) ? $_POST['numberPo'] : '' ?>">
                    <?php
                    if (isset($formError['numberPo'])) {
                    ?>
                        <span class="alert alert-danger" role="alert">
                            <?= $formError['numberPo'] ?>
                        </span>
                    <?php
                    }
                    ?>
                </div><br>
                <div>
                    <label for="badge">nombre de badge</label>
                    <input type="text" class="form-control" name="badge" id="badge" value="<?= isset($_POST['badge']) ? $_POST['badge'] : '' ?>">
                    <?php
                    if (isset($formError['badge'])) {
                    ?>
                        <span class="alert alert-danger" role="alert">
                            <?= $formError['badge'] ?>
                        </span>
                    <?php
                    }
                    ?>
                </div>
                <div>
                    <label for="codecademy">liens codecademy</label>
                    <input type="text" class="form-control" name="codecademy" id="codecademy" value="<?= isset($_POST['codecademy']) ? $_POST['codecademy'] : '' ?>">
                    <?php
                    if (isset($formError['codecademy'])) {
                    ?>
                        <span class="alert alert-danger" role="alert">
                            <?= $formError['codecademy'] ?>
                        </span>
                    <?php
                    }
                    ?>
                </div>
                <div>
                    <label for="question"> Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi ?</label>
                    <input type="text" class="form-control" name="question" id="question" value="<?= isset($_POST['question']) ? $_POST['question'] : '' ?>">
                    <?php
                    if (isset($formError['question'])) {
                    ?>
                        <span class="alert alert-danger" role="alert">
                            <?= $formError['question'] ?>
                        </span>
                    <?php
                    }
                    ?>
                </div>
                <div>
                    <label for="hack"> Racontez-nous un de vos "hacks" (pas forcément technique ou informatique)</label>
                    <input type="text" class="form-control" name="hack" id="question" value="<?= isset($_POST['hack']) ? $_POST['hack'] : '' ?>">
                    <?php
                    if (isset($formError['hack'])) {
                    ?>
                        <span class="alert alert-danger" role="alert">
                            <?= $formError['hack'] ?>
                        </span>
                    <?php
                    }
                    ?>
                </div>
            </div>
            <div id="bouton">
                <input type="submit" name="submit" class="btn btn-outline-success" value="Envoyer" aria-invalid="false">
                <a href="/filrouge/imagesFilRouge/bouton or.jpg"></a>
            </div>
    </div>
    </form>
    </div>
<?php
}
?>
</div>

<?php
include 'footer.php';
?>