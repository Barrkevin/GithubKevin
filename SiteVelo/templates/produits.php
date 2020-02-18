<?php
require "main/head.php";
?>

    <div class="card-deck mt-5">
    <div class="card">
        <img src="../libs/img/veloenfant.jpg" class="card-img-top" alt="ve">
        <div class="card-body">
            <h5 class="card-title">Vélo pour enfant.</h5>
            <p class="card-text">Iudicium accusatoribus defendentibus incredibilisque nos maeror Nam parentis poni nostra pietate quam iuratis nobis est.</p>
        </div>
        <div class="card-footer">
            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal1">
                Réserver
            </button>
            <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="#modaltitre1" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modaltitre1">Tarif</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body text-center">
                            <p>Le prix est de 2 euros la journée.</p>
                            <p> Quantités : <select id="monselect1" class="mt-2">
                                <option value="qté1">1</option>
                                <option value="qtévélo2">2</option>
                                <option value="qtévélo3">3</option>
                                <option value="qtévélo4">4</option>
                                <option value="qtévélo5">5</option>
                                <option value="qtévélo6">6</option>
                            </select></p>
                            <p> Durée : <select id="monselect2">
                                <option value="1jour">1 jour</option>
                                <option value="1semaine">1 semaine</option>
                                <option value="1mois">1 mois</option>
                            </select></p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-dark" data-dismiss="modal">Annuler</button>
                            <button type="button" class="btn btn-info">Carte bancaire</button>
                            <button type="button" class="btn btn-primary">Paypal</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <img src="../libs/img/veloenfant2.jpg" class="card-img-top" alt="vee">
        <div class="card-body">
            <h5 class="card-title">Vélo électrique pour enfant.</h5>
            <p class="card-text">Navigabant scopulis has pilatorum ad Isauriae scopulis appulit contigui has Scironis sed Scironis appulit Scironis.</p>
        </div>
        <div class="card-footer">
            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal2">
                Réserver
            </button>
            <div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="modaltitre2" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modaltitre2">Tarif</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body text-center">
                            <p>Le prix est de 2,20 euros la journée.</p>
                            <p> Quantités : <select id="monselect3" class="mt-2">
                                <option value="qtévélo1">1</option>
                                <option value="qtévélo2">2</option>
                                <option value="qtévélo3">3</option>
                                <option value="qtévélo4">4</option>
                                <option value="qtévélo5">5</option>
                                <option value="qtévélo6">6</option>
                            </select></p>
                            <p> Durée : <select id="monselect4">
                                <option value="1jour">1 jour</option>
                                <option value="1semaine">1 semaine</option>
                                <option value="1mois">1 mois</option>
                            </select></p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-dark" data-dismiss="modal">Annuler</button>
                            <button type="button" class="btn btn-info">Carte bancaire</button>
                            <button type="button" class="btn btn-primary">Paypal</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <img src="../libs/img/veloenfant3.jpg" class="card-img-top" alt="vce">
        <div class="card-body">
            <h5 class="card-title">Vélo cross pour enfant.</h5>
            <p class="card-text">Itinere quod fulminis servabantur crebro servabantur quod laevorsum Mesopotamiae impetrasset quia autem parumque tractus Mesopotamiae.</p>
        </div>
        <div class="card-footer">
            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal3">
                Réserver
            </button>
            <div class="modal fade" id="modal3" tabindex="-1" role="dialog" aria-labelledby="titremodal3" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="titremodal3">Tarif</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body text-center">
                            <p>Le prix est de 2,10 euros la journée.</p>
                            <p> Quantités : <select id="monselect5" class="mt-2">
                                <option value="qtévélo1">1</option>
                                <option value="qtévélo2">2</option>
                                <option value="qtévélo3">3</option>
                                <option value="qtévélo4">4</option>
                                <option value="qtévélo5">5</option>
                                <option value="qtévélo6">6</option>
                            </select></p>
                            <p> Durée : <select id="monselect6">
                                <option value="1jour">1 jour</option>
                                <option value="1semaine">1 semaine</option>
                                <option value="1mois">1 mois</option>
                            </select></p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-dark" data-dismiss="modal">Annuler</button>
                            <button type="button" class="btn btn-info">Carte bancaire</button>
                            <button type="button" class="btn btn-primary">Paypal</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="card-deck mt-5">
    <div class="card">
        <img src="../libs/img/velocrossmilieu.jpg" class="card-img-top" alt="vc22">
        <div class="card-body">
            <h5 class="card-title">Vélo cross 22 pouces.</h5>
            <p class="card-text">In quicquid id fecere urgebatur licet aliquotiens id acervis quicquid iusque ulla velut id sedisset.</p>
        </div>
        <div class="card-footer">
            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal4">
                Réserver
            </button>
            <div class="modal fade" id="modal4" tabindex="-1" role="dialog" aria-labelledby="modaltitre4" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modaltitre4">Tarif</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body text-center">
                            <p>Le prix est de 2,40 euros la journée.</p>
                            <p> Quantités : <select id="monselect7" class="mt-2">
                                <option value="qtévélo1">1</option>
                                <option value="qtévélo2">2</option>
                                <option value="qtévélo3">3</option>
                                <option value="qtévélo4">4</option>
                                <option value="qtévélo5">5</option>
                                <option value="qtévélo6">6</option>
                            </select></p>
                            <p> Durée : <select id="monselect8">
                                <option value="1jour">1 jour</option>
                                <option value="1semaine">1 semaine</option>
                                <option value="1mois">1 mois</option>
                            </select></p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-dark" data-dismiss="modal">Annuler</button>
                            <button type="button" class="btn btn-info">Carte bancaire</button>
                            <button type="button" class="btn btn-primary">Paypal</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <img src="../libs/img/velomilieu.jpg" class="card-img-top" alt="vc24">
        <div class="card-body">
            <h5 class="card-title">Vélo cross 24 pouces.</h5>
            <p class="card-text">In quicquid id fecere urgebatur licet aliquotiens id acervis quicquid iusque ulla velut id sedisset.</p>
        </div>
        <div class="card-footer">
            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal5">
                Réserver
            </button>
            <div class="modal fade" id="modal5" tabindex="-1" role="dialog" aria-labelledby="modaltitre5" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modaltitre5">Tarif</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body text-center">
                            <p>Le prix est de 2,50 euros la journée.</p>
                            <p> Quantités : <select id="monselect9" class="mt-2">
                                <option value="qtévélo1">1</option>
                                <option value="qtévélo2">2</option>
                                <option value="qtévélo3">3</option>
                                <option value="qtévélo4">4</option>
                                <option value="qtévélo5">5</option>
                                <option value="qtévélo6">6</option>
                            </select></p>
                            <p> Durée : <select id="monselect10">
                                <option value="1jours">1 jour</option>
                                <option value="1semaine">1 semaine</option>
                                <option value="1mois">1 mois</option>
                            </select></p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-dark" data-dismiss="modal">Annuler</button>
                            <button type="button" class="btn btn-info">Carte bancaire</button>
                            <button type="button" class="btn btn-primary">Paypal</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <img src="../libs/img/veloo.jpg" class="card-img-top" alt="vc26">
        <div class="card-body">
            <h5 class="card-title">Vélo cross 26 pouces.</h5>
            <p class="card-text">Amplis hac clementer prima vetere ut Osdroenam et post Commagena post ut inlustris descriptione prima.</p>
        </div>
        <div class="card-footer">
            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal6">
                Réserver
            </button>
            <div class="modal fade" id="modal6" tabindex="-1" role="dialog" aria-labelledby="modaltitre6" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modaltitre6">Tarif</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body text-center">
                            <p>Le prix est de 2,70 euros la journée.</p>
                            <p> Quantités : <select id="monselect11" class="mt-2">
                                <option value="qtévélo1">1</option>
                                <option value="qtévélo">2</option>
                                <option value="qtévélo3">3</option>
                                <option value="qtévélo4">4</option>
                                <option value="qtévélo5">5</option>
                                <option value="qtévélo6">6</option>
                            </select></p>
                            <p> Durée : <select id="monselect12">
                                <option value="1jour">1 jour</option>
                                <option value="1semaine">1 semaine</option>
                                <option value="1mois">1 mois</option>
                            </select></p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-dark" data-dismiss="modal">Annuler</button>
                            <button type="button" class="btn btn-info">Carte bancaire</button>
                            <button type="button" class="btn btn-primary">Paypal</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="card-deck mt-5">
    <div class="card">
        <img src="../libs/img/velohomme.jpg" class="card-img-top" alt="veh">
        <div class="card-body">
            <h5 class="card-title">Vélo électrique pour Homme.</h5>
            <p class="card-text">Igitur molitioni molitioni et tribunos praediximus molitioni ut fabricarum ut his ob nominum appellatos ipso.</p>
        </div>
        <div class="card-footer">
            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal7">
                Réserver
            </button>
            <div class="modal fade" id="modal7" tabindex="-1" role="dialog" aria-labelledby="modaltitre7" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modaltitre7">Tarif</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body text-center">
                            <p>Le prix est de 2,70 euros la journée.</p>
                            <p> Quantités : <select id="monselect13" class="mt-2">
                                <option value="qtévélo1">1</option>
                                <option value="qtévélo2">2</option>
                                <option value="qtévélo3">3</option>
                                <option value="qtévélo4">4</option>
                                <option value="qtévélo5">5</option>
                                <option value="qtévélo6">6</option>
                            </select></p>
                            <p> Durée : <select id="monselect14">
                                <option value="1jour">1 jour</option>
                                <option value="1semaine">1 semaine</option>
                                <option value="1mois">1 mois</option>
                            </select></p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-dark" data-dismiss="modal">Annuler</button>
                            <button type="button" class="btn btn-info">Carte bancaire</button>
                            <button type="button" class="btn btn-primary">Paypal</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <img src="../libs/img/velofemme.jpg" class="card-img-top" alt="vef">
        <div class="card-body">
            <h5 class="card-title">Vélo électrique pour Femme.</h5>
            <p class="card-text">Igitur molitioni molitioni et tribunos praediximus molitioni ut fabricarum ut his ob nominum appellatos ipso.</p>
        </div>
        <div class="card-footer">
            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal8">
                Réserver
            </button>
            <div class="modal fade" id="modal8" tabindex="-1" role="dialog" aria-labelledby="modaltitre8" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modaltitre8">Tarif</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body text-center">
                            <p>Le prix est de 2,50euros la journée.</p>
                            <p> Quantités : <select id="monselect15" class="mt-2">
                                <option value="qtévélo1">1</option>
                                <option value="qtévélo2">2</option>
                                <option value="qtévélo3">3</option>
                                <option value="qtévélo4">4</option>
                                <option value="qtévélo5">5</option>
                                <option value="qtévélo6">6</option>
                            </select></p>
                            <p> Durée : <select id="monselect16">
                                <option value="1jour">1 jour</option>
                                <option value="1semaine">1 semaine</option>
                                <option value="1mois">1 mois</option>
                            </select></p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-dark" data-dismiss="modal">Annuler</button>
                            <button type="button" class="btn btn-info">Carte bancaire</button>
                            <button type="button" class="btn btn-primary">Paypal</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <img src="../libs/img/velocross.jpg" class="card-img-top" alt="vec">
        <div class="card-body">
            <h5 class="card-title">Vélo électrique cross.</h5>
            <p class="card-text">Vetitis suum familiarem imperii tempore Phoenice ac imperium absolvi in ad maiestatis duce caput postulatus.</p>
        </div>
        <div class="card-footer">
            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal9">
                Réserver
            </button>
            <div class="modal fade" id="modal9" tabindex="-1" role="dialog" aria-labelledby="modaltitre9" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modaltitre9">Tarif</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body text-center">
                            <p>Le prix est de 2,80 euros la journée.</p>
                            <p> Quantités : <select id="monselect17" class="mt-2">
                                <option value="qtévélo1">1</option>
                                <option value="qtévélo2">2</option>
                                <option value="qtévélo3">3</option>
                                <option value="qtévélo4">4</option>
                                <option value="qtévélo5">5</option>
                                <option value="qtévélo6">6</option>
                            </select></p>
                            <p> Durée : <select id="monselect18">
                                <option value="1jour">1 jour</option>
                                <option value="1semaine">1 semaine</option>
                                <option value="1mois">1 mois</option>
                            </select></p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-dark" data-dismiss="modal">Annuler</button>
                            <button type="button" class="btn btn-info">Carte bancaire</button>
                            <button type="button" class="btn btn-primary">Paypal</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<?php
require "main/footer.php";
?>