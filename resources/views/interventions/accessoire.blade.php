<div class="modal fade" id="modal-accessoire" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">AJOUTER UN ACCESSOIRE</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			
				<input type="text" id="accessoire-id" name="accessoire-id" hidden="1">
				<div class="modal-body">
					<div class="row"> 
						<div class="col-sm-6 col-sm-offset-3">
							<span class="block input-icon input-icon-right">
								<input type="text" id="accessoire" name="accessoire"  placeholder="Chercher un accessoire" class="width-100">
								<i class="ace-icon fa fa-info-circle"></i>
							</span>
						</div>
					</div>
					<div class="form-group">
						<label for="reference" class="col-form-label">Reference:</label>
						<input type="text" class="form-control" id="reference" name="reference">
					</div>
					<div class="form-group">
						<label for="modele_accessoire" class="col-form-label">Modele:</label>
						<input type="text" class="form-control" id="modele_accessoire" name="modele_accessoire">
					</div>
					<div class="form-group">
						<label for="serie" class="col-form-label">Serie:</label>
						<input type="text" class="form-control" id="serie" name="serie">
					</div>
					<div class="form-group">
						<label for="couleur" class="col-form-label">Couleur:</label>
						<input type="text" class="form-control" id="couleur_accessoire" name="couleur_accessoire">
					</div>
					<div class="form-group">
						<label for="prix_accessoire" class="col-form-label">Prix:</label>
						<input type="number" class="form-control" id="prix_accessoire" name="prix_accessoire">
					</div>
					<!--
					<div class="form-group">
						<label for="quantite" class="col-form-label">Quantité:</label>
						<input type="text" class="form-control" id="quantite" name="quantite">
					</div>-->

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
					<button  id="envoyer-accessoire" class="btn btn-primary">Envoyer</button>
				</div>
			
		</div>
	</div>
</div>
