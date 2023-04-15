<div class="row" id="invesstissement">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title"><i class="fas fa-user-plus"></i> Invesstissement</h4>
          <hr />
          <br />
            <h6>Identification du Projet</h6>
            <hr />
            <form action="<?php echo e(route('investissement.store')); ?>" method="post">
              <?php echo csrf_field(); ?>
            <div class="row">
              <div class="form-group col-md-3">
                <label for="inputEmail4">Tél</label>
                <input name="telephone" onKeyPress="if(this.value.length==9) return false" type="number"
                  class="form-control" id="inputEmail4" placeholder="">
              </div>
              <div class="form-group col-md-3">
                <label for="inputPassword4">Fax</label>
                <input name="fax" type="number" onKeyPress="if(this.value.length==9) return false" class="form-control"
                  id="inputPassword4" placeholder="">
              </div>
              <div class="form-group col-md-3">
                <label for="inputPassword4">Mobile</label>
                <input name="mobile" type="number" onKeyPress="if(this.value.length==10) return false"
                  class="form-control" id="inputPassword4" placeholder="">
              </div>
              <div class="form-group col-md-3">
                <label for="inputPassword4">E-mail</label>
                <input name="email" type="email" class="form-control" id="inputPassword4" placeholder="">
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-3">
                <div class="mb-3">
                  <label  class="form-label">Secteur</label>
                  <select name="secteur" class="form-control select2" id="inputState" >
                    <option selected>Sélectionner...</option>
                    <option value="Agriculture">Agriculture</option>
                    <option value="Industrie">Industrie</option>
                    <option value="Services">Services</option>
                  </select>
                </div>
              </div>
              <div class="col-md-3">
                <div class="mb-3">
                  <label  class="form-label">Activité</label>
                  <input name="activite" type="text" class="form-control"   />
                </div>
              </div>
              <div class="col-md-3">
                <div class="mb-3">
                  <label for="validationCustom02" class="form-label">Implimentation</label>
                  <select name="implimentation" class="form-control select2" id="validationCustom03" >
                    <option selected>Sélectionner...</option>
                    <option value="Zone Industrielle">
                      - Zone Industrielle
                    </option>
                    <option value="Zone d'Activité">
                      - Zone d'Activité
                    </option>
                    <option value="Terrain agricole">
                      - Terrain agricole
                    </option>
                    <option value="Hors zones">- Hors zones</option>
                  </select>
                </div>
                <br />
              </div>
              <div class="col-md-3">
                <div class="mb-3">
                  <label for="validationCustom02" class="form-label">Superficie</label>
                  <input name="Superficie" type="number" class="form-control"   />
                </div>
                <br />
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-3">
                <div class="mb-3">
                  <label for="inputState">Statut du foncier</label>
                  <select id="inputState" name="statut_du_foncier" class="form-control">
                    <option selected>Séléctionner...</option>
                    <option value="Arreté de concession">- Arreté de concession</option>
                    <option value="Act de concession">- Act de concession</option>
                    <option value="Act de propriété">- Act de propriété</option>
                    <option value="Location">- Location</option>
                    <option value="Occupation sans titre">- Occupation sans titre</option>
                  </select>
                  </select>
                </div>
              </div>
              <div class="col-md-3">
                <div class="mb-3">
                  <label for="inputState">Etat actuel de projet</label>
                  <select name="etat_projet" id="etat_projet" class="form-control">
                    <option selected>Séléctionner...</option>
                    <option value="fiche1">- Achevé (Fiche-01)</option>
                    <option value="fiche2">- En voie de réalisation (Fiche-02)</option>
                    <option value="fiche3">- En voie de Lancement (Fiche-03)</option>
                  </select>
                </div>
              </div>
            </div>
            <br>
  
  
            <div class="row" id="fiche1">
              <div class="col-md-4">
                <h6> Projet achevé (Fiche-01)</h6>
                <hr />
                <div class="mb-3">
                  <label for="inputState">Projet en exploitation</label>
                  <select name="projet_exploitation" id="projet_exploitation" class="form-control">
                    <option value="c" selected>Sélectionner...</option>
                    <option value="o">Oui</option>
                    <option value="n">Non</option>
                  </select>
                </div>
              </div>
              <div class="col-md-4">
                <div class="mb-3">
                  <label for="inputPassword4">Date</label>
                  <input type="date" max="<?php echo e(date('Y-m-d')); ?>" name="date_projet_exploitation" class="form-control"
                    placeholder="">
                </div>
              </div>
              <div class="col-md-4">
                <div class="mb-3">
                  <label for="inputState">Emploi Crés</label>
                  <input type="number" name="emploi_cre" class="form-control" placeholder="">
                </div>
              </div>
              <div class="row">
                <div class="col-md-3">
                  <div class="mb-3">
                    <label for="inputState">Permis de construire</label>
                    <select name="permis_construction" class="form-control" id="permis_construction" class="form-control">
                      <option value="c">Choisir</option>
                      <option value="o">Oui</option>
                      <option value="n">Non</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="mb-3">
                    <label for="inputPassword4">Date</label>
                    <input type="date" max="<?php echo e(date('Y-m-d')); ?>" name="date_projet_exploitation" class="form-control"
                      placeholder="">
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="mb-3">
                    <label for="inputState">Arrêté de création</label>
                    <select name="arret_creation" id="arret_creation" class="form-control">
                      <option value="c" selected>Choisir</option>
                      <option value="o">Oui</option>
                      <option value="n">Non</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="mb-3">
                    <label for="inputPassword4">Date</label>
                    <input type="date" max="<?php echo e(date('Y-m-d')); ?>" name="date_projet_exploitation" class="form-control"
                      placeholder="">
                  </div>
                </div>
              </div>
  
              <div class="row">
                <div class="col-md-3">
                  <div class="mb-3">
                    <label for="inputState">Approbation de l’étude de danger</label>
                    <select name="approbation" class="form-control" id="approbation" class="form-control">
                      <option value="c">Choisir</option>
                      <option value="o">Oui</option>
                      <option value="n">Non</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="mb-3">
                    <label for="inputPassword4">Date</label>
                    <input type="date" max="<?php echo e(date('Y-m-d')); ?>" name="date_projet_exploitation" class="form-control"
                      placeholder="">
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="mb-3">
                    <label for="inputState">Arrêté d’exploitation</label>
                    <select name="arret_exploitation" id="arret_exploitation" class="form-control">
                      <option value="c" selected>Choisir</option>
                      <option value="o">Oui</option>
                      <option value="n">Non</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="mb-3">
                    <label for="inputPassword4">Date</label>
                    <input type="date" max="<?php echo e(date('Y-m-d')); ?>" name="date_projet_exploitation" class="form-control"
                      placeholder="">
                  </div>
                </div>
              </div>
  
              <div class="row">
                <div class="col-md-3">
                  <div class="mb-3">
                    <label for="inputState">Certificat de conformité</label>
                    <select name="certficat" class="form-control" id="certficat" class="form-control">
                      <option value="c">Choisir</option>
                      <option value="o">Oui</option>
                      <option value="n">Non</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="mb-3">
                    <label for="inputPassword4">Date</label>
                    <input type="date" max="<?php echo e(date('Y-m-d')); ?>" name="date_projet_exploitation" class="form-control"
                      placeholder="">
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="mb-3">
                    <label for="inputState">Arrêté de régularisation (loi 08-15)</label>
                    <select name="arreteregularisation" id="arreteregularisation" class="form-control">
                      <option value="c" selected>Choisir</option>
                      <option value="o">Oui</option>
                      <option value="n">Non</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="mb-3">
                    <label for="inputPassword4">Date</label>
                    <input type="date" max="<?php echo e(date('Y-m-d')); ?>" name="date_projet_exploitation" class="form-control"
                      placeholder="">
                  </div>
                </div>
              </div>
  
              <div class="row">
                <div class="col-md-3">
                  <div class="mb-3">
                    <label for="inputState">Autorisation exceptionnelle</label>
                    <select name="autorisation" class="form-control" id="autorisation" class="form-control">
                      <option value="c">Choisir</option>
                      <option value="o">Oui</option>
                      <option value="n">Non</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="mb-3">
                    <label for="inputPassword4">Date</label>
                    <input type="date" max="<?php echo e(date('Y-m-d')); ?>" name="date_projet_exploitation" class="form-control"
                      placeholder="">
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="mb-3">
                    <label for="inputState">Raccordement aux réseaux divers</label>
                    <select name="raccordement" class="form-control" id="raccordement" class="form-control">
                      <option value="c">Choisir</option>
                      <option value="o">Oui</option>
                      <option value="n">Non</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="mb-3">
                    <label for="inputPassword4">Date</label>
                    <input type="date" max="<?php echo e(date('Y-m-d')); ?>" name="date_projet_exploitation" class="form-control"
                      placeholder="">
                  </div>
                </div>
              </div>
  
              <div class="row">
                <div class="col-md-6">
                  <div class="mb-3">
                    <label for="inputEmail4">Contraintes rencontrées</label>
                    <textarea class="form-control" name="contraintes" aria-label="With textarea"></textarea>
                  </div>
                </div>
              </div>
            </div>
  
  
            <div class="row" id="fiche2">
              <h6>Projet en voie de réalisation (Fiche-02)</h6>
              <hr />
              <div class="col-md-3">
                <div class="mb-3">
                  <label for="inputPassword4">Date Lancement de projet</label>
                  <input type="date" max="<?php echo e(date('Y-m-d')); ?>" name="date_projet_exploitation" class="form-control"
                    placeholder="">
                </div>
              </div>
              <div class="row">
                <div class="col-md-3">
                  <div class="mb-3">
                    <label for="inputState">Permis de construire</label>
                    <select name="permis_construction2" id="permis_construction2" class="form-control">
                      <option value="c" selected>Choisir</option>
                      <option value="o">Oui</option>
                      <option value="n">Non</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="mb-3">
                    <label for="inputPassword4">Date</label>
                    <input type="date" max="<?php echo e(date('Y-m-d')); ?>" name="date_projet_exploitation" class="form-control"
                      placeholder="">
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="mb-3">
                    <label for="inputState">Arrêté de création</label>
                    <select name="arret_creation2" class="form-control" id="arret_creation2" alue)" class="form-control">
                      <option value="c">Choisir</option>
                      <option value="o">Oui</option>
                      <option value="n">Non</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="mb-3">
                    <label for="inputPassword4">Date</label>
                    <input type="date" max="<?php echo e(date('Y-m-d')); ?>" name="date_projet_exploitation" class="form-control"
                      placeholder="">
                  </div>
                </div>
              </div>
  
              <div class="row">
                <div class="col-md-6">
                  <div class="mb-3">
                    <label for="inputEmail4">Taux de réalisation</label>
                    <input type="number" name="taux" class="form-control" placeholder="">
                  </div>
                </div>
              </div>
  
              <div class="row">
                <div class="col-md-6">
                  <div class="mb-3">
                    <label for="inputEmail4">Contraintes rencontrées</label>
                    <textarea class="form-control" name="contraintes" aria-label="With textarea"></textarea>
                  </div>
                </div>
              </div>
            </div>
  
  
            <div class="row" id="fiche3">
              <h6>Projet en voie de lancement (Fiche-03)</h6>
              <hr>
              <div class="col-md-3">
                <div class="mb-3">
                  <label for="inputState">Permis de construire</label>
                  <select name="permis_construction2" id="permis_construction2" class="form-control">
                    <option value="c" selected>Choisir</option>
                    <option value="o">Oui</option>
                    <option value="n">Non</option>
                  </select>
                </div>
              </div>
              <div class="col-md-3">
                <div class="mb-3">
                  <label for="inputPassword4">Date</label>
                  <input type="date" max="<?php echo e(date('Y-m-d')); ?>" name="date_projet_exploitation" class="form-control"
                    placeholder="">
                </div>
              </div>
              <div class="col-md-3">
                <div class="mb-3">
                  <label for="inputState">Arrêté de création</label>
                  <select name="arret_creation2" class="form-control" id="arret_creation2" alue)" class="form-control">
                    <option value="c">Choisir</option>
                    <option value="o">Oui</option>
                    <option value="n">Non</option>
                  </select>
                </div>
              </div>
              <div class="col-md-3">
                <div class="mb-3">
                  <label for="inputPassword4">Date</label>
                  <input type="date" max="<?php echo e(date('Y-m-d')); ?>" name="date_projet_exploitation" class="form-control"
                    placeholder="">
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="mb-3">
                    <label for="inputEmail4">Contraintes rencontrées</label>
                    <textarea class="form-control" name="contraintes" aria-label="With textarea"></textarea>
                  </div>
                </div>
              </div>
            </div>
            <button type="submit" class="btn btn-success">Envoyer</button>
          </form>
        </div>
      </div>
    </div>
  </div>

