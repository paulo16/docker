<div class="modal fade" id="modal-service" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">AJOUTER UN SERVICE</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form>
					<div class="form-group">
						<label for="nom_service" class="col-form-label">Nom:</label>
						<input type="text" class="form-control" readonly id="nom_service" name="nom_service">
					</div>
					<div class="form-group">
						<label for="message-text" id="description_service" class="col-form-label">Description:</label>
						<textarea class="form-control" id="description_service" name="description_service"></textarea>
					</div>
					<div class="form-group">
						<label for="prix_service" class="col-form-label">Prix:</label>
						<input type="number" class="form-control" id="prix_service" name="prix_service">
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