<h2>Profile</h2>
<p class="lead">Tenured product manager who loves working on improving developer experiences, databases, open source, and the cloud</p>

<hr />

<div class="row">
	<div class="col-md-4">
		<h3>About me</h3>
		<p>
			<?= $profile->biography; ?>
		</p>
	</div>
	<div class="col-md-4 text-center">
		<img src="<?= VIEW_PATH; ?>images/profilenew.png" alt="Meet Bhagdev" width="246" height="246" />
	</div>
	<div class="col-md-4">
		<h3>Details</h3>
		<p>
			<strong>Name:</strong><br />
			<?= $profile->full_name; ?><br />
			<strong>Age:</strong><br />
			<?= $profile->age; ?> years<br />
			<strong>Location:</strong><br />
			<?= $profile->current_location->city; ?>, <?= $profile->current_location->country; ?>, <?= $profile->current_location->planet; ?>
		</p>
		
		<a href="https://www.linkedin.com/in/meet-bhagdev" target="_blank" style="display:inline-block; padding:8px 16px; background-color:#0077B5; color:#fff; border-radius:4px; font-size:14px; font-weight:600; text-decoration:none;">Connect on LinkedIn</a>
	</div>
</div>
