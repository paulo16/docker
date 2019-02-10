<div class="modal fade" id="modal-accessoire" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">AJOUTER UN ACCESSOIRE</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form>
					<div class="form-group">
						<label for="form-field-select-3">accessoire Reference</label>
						<select class="form-control" id="accessoire_nom" name="accessoire_nom" data-placeholder="Choose a State..." >
							<option value="">  </option>
							<option value="AL">Alabama</option>
							<option value="AK">Alaska</option>
							<option value="AZ">Arizona</option>
							<option value="AR">Arkansas</option>
						</select>
					</div>
					<div class="form-group">
						<label for="modele" class="col-form-label">Modele:</label>
						<input type="text" class="form-control" id="modele" name="modele">
					</div>
					<div class="form-group">
						<label for="serie" class="col-form-label">Serie:</label>
						<input type="text" class="form-control" id="serie" name="serie">
					</div>
					<div class="form-group">
						<label for="couleur" class="col-form-label">Couleur:</label>
						<input type="text" class="form-control" id="couleur" name="couleur">
					</div>
					<div class="form-group">
						<label for="quantite" class="col-form-label">Quantité:</label>
						<input type="text" class="form-control" id="quantite" name="quantite">
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
				<button type="button" class="btn btn-primary">Envoyer</button>
			</div>
		</div>
	</div>
</div>
