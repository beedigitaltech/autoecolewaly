<div class="bloc-contact page-section">
    <div class="container">
        <div class=" mt-5 text-center contact " id="contact">
            <div class="text-center">
                <h2 class="section-heading text-uppercase mt-5 mb-5">Contactez nous !</h2>
            </div>
            <div class="row align-items-center reveal">
                <div class="col-md-6">
                    <div class="reveal-1">
                        <img src="/images/auto-ecole.jpg" class="img-fluid" alt="image Bee digital" width="100%" height="800px">
                    </div>
                </div>
                <div class="col-md-6 form-contact reveal">
                    <h4 class="contact-h4  text-center mt-4 mb-3 ">Formulaire de contact</h4>
                    <div class="res-form mx-3">

                    </div>
                    <form id="contactForm" name="sentMessage" novalidate="novalidate" method="post" action="traitementMessage.php" class="">
                        <div class="row align-items-stretch mb-5 ">
                            <div class="col-md-12 mx-auto">
                                <div class=" my-3">
                                    <div class="col-md-12">
                                        <div class="row reveal-1">
                                            <div class="col-sm-1 col-md-12 mb-2">
                                                <label class="sr-only" for="prenom">Prénom</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text"><i class="fas fa-user-alt"></i></div>
                                                    </div>
                                                    <input type="text" class="form-control" id="prenom" placeholder="Prénom" name="prenom">
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row mt-2 reveal-2">
                                            <div class="col-sm-1 col-md-12">
                                                <label class="sr-only" for="nom">Nom</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text"><i class="fas fa-user-alt"></i></div>
                                                    </div>
                                                    <input type="text" class="form-control" id="nom" placeholder="Nom" name="nom">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class=" my-3">
                                    <div class="col-md-12">
                                        <div class="row reveal-3">
                                            <div class="col-md-12 mb-2">
                                                <label class="sr-only" for="email">Email</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text font-weight-bold" id="basic-addon1">@</span>
                                                    </div>
                                                    <input type="email" class="form-control" id="email" placeholder="Email" name="email">
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row mt-2 reveal-4">
                                            <div class="col-md-12">
                                                <label class="sr-only" for="telephone">Téléphone</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text"><i class="fas fa-phone-alt"></i></div>
                                                    </div>
                                                    <input type="text" class="form-control" id="telephone" placeholder="Téléphone" name="telephone">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="row reveal-4">
                                        <div class="col-md-12">
                                            <label class="sr-only" for="message">Message</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fas fa-envelope"></i></div>
                                                </div>
                                                <textarea class="form-control" id="message" placeholder="Votre message ici ..." rows="4" required="required" name="message" data-validation-required-message="Please enter a message." id="message"></textarea>
                                                <p class="help-block text-danger"></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group form-group-textarea mx-3 mt-3">
                                    <button class="btn btn-primary btn-block text-uppercase mt-2" id="sendMessageButton" type="submit">Envoyer</button>

                                </div>

                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>