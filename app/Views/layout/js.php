<?= $this->extend('Blog\Views\default') ?>

<!-- General JS Scripts -->
<script src="<?= site_url(); ?>assets/node_modules/jquery.min.js"></script>
<script src="<?= site_url(); ?>assets/node_modules/popper.js"></script>
<script src="<?= site_url(); ?>assets/node_modules/tooltip.js"></script>
<script src="<?= site_url(); ?>assets/node_modules/bootstrap/js/bootstrap.min.js"></script>
<script src="<?= site_url(); ?>assets/node_modules/nicescroll/jquery.nicescroll.min.js"></script>
<script src="<?= site_url(); ?>assets/node_modules/moment.min.js"></script>
<script src="<?= site_url(); ?>assets/js/stisla.js"></script>

<!-- JS Libraies -->
<?php
if ($this->uri->segment(2) == "" || $this->uri->segment(2) == "index") { ?>
	<script src="<?= site_url(); ?>assets/node_modules/jquery.sparkline.min.js"></script>
	<script src="<?= site_url(); ?>assets/node_modules/chart.min.js"></script>
	<script src="<?= site_url(); ?>assets/node_modules/owlcarousel2/dist/owl.carousel.min.js"></script>
	<script src="<?= site_url(); ?>assets/node_modules/summernote/summernote-bs4.js"></script>
	<script src="<?= site_url(); ?>assets/node_modules/chocolat/dist/js/jquery.chocolat.min.js"></script>
<?php
} elseif ($this->uri->segment(2) == "index_0") { ?>
	<script src="<?= site_url(); ?>assets/node_modules/simple-weather/jquery.simpleWeather.min.js"></script>
	<script src="<?= site_url(); ?>assets/node_modules/chart.min.js"></script>
	<script src="<?= site_url(); ?>assets/node_modules/jqvmap/dist/jquery.vmap.min.js"></script>
	<script src="<?= site_url(); ?>assets/node_modules/jqvmap/dist/maps/jquery.vmap.world.js"></script>
	<script src="<?= site_url(); ?>assets/node_modules/summernote/summernote-bs4.js"></script>
	<script src="<?= site_url(); ?>assets/node_modules/chocolat/dist/js/jquery.chocolat.min.js"></script>
<?php
} elseif ($this->uri->segment(2) == "bootstrap_card") { ?>
	<script src="<?= site_url(); ?>assets/node_modules/chocolat/dist/js/jquery.chocolat.min.js"></script>
	<script src="<?= site_url(); ?>assets/node_modules/jquery-ui/jquery-ui.min.js"></script>
<?php
} elseif ($this->uri->segment(2) == "bootstrap_modal") { ?>
	<script src="<?= site_url(); ?>assets/node_modules/prism/prism.js"></script>
<?php
} elseif ($this->uri->segment(2) == "layout_transparent") { ?>
	<script src="<?= site_url(); ?>assets/node_modules/sticky-kit.js"></script>
<?php
} elseif ($this->uri->segment(2) == "components_gallery") { ?>
	<script src="<?= site_url(); ?>assets/node_modules/chocolat/dist/js/jquery.chocolat.min.js"></script>
<?php
} elseif ($this->uri->segment(2) == "components_multiple_upload") { ?>
	<script src="<?= site_url(); ?>assets/node_modules/dropzonejs/min/dropzone.min.js"></script>
<?php
} elseif ($this->uri->segment(2) == "components_statistic") { ?>
	<script src="<?= site_url(); ?>assets/node_modules/jquery.sparkline.min.js"></script>
	<script src="<?= site_url(); ?>assets/node_modules/chart.min.js"></script>
	<script src="<?= site_url(); ?>assets/node_modules/jqvmap/dist/jquery.vmap.min.js"></script>
	<script src="<?= site_url(); ?>assets/node_modules/jqvmap/dist/maps/jquery.vmap.world.js"></script>
	<script src="<?= site_url(); ?>assets/node_modules/jqvmap/dist/maps/jquery.vmap.indonesia.js"></script>
<?php
} elseif ($this->uri->segment(2) == "components_table") { ?>
	<script src="<?= site_url(); ?>assets/node_modules/jquery-ui/jquery-ui.min.js"></script>
<?php
} elseif ($this->uri->segment(2) == "components_user") { ?>
	<script src="<?= site_url(); ?>assets/node_modules/owlcarousel2/dist/owl.carousel.min.js"></script>
<?php
} elseif ($this->uri->segment(2) == "forms_advanced_form") { ?>
	<script src="<?= site_url(); ?>assets/node_modules/cleave-js/dist/cleave.min.js"></script>
	<script src="<?= site_url(); ?>assets/node_modules/cleave-js/dist/addons/cleave-phone.us.js"></script>
	<script src="<?= site_url(); ?>assets/node_modules/jquery-pwstrength/jquery.pwstrength.min.js"></script>
	<script src="<?= site_url(); ?>assets/node_modules/bootstrap-daterangepicker/daterangepicker.js"></script>
	<script src="<?= site_url(); ?>assets/node_modules/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
	<script src="<?= site_url(); ?>assets/node_modules/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
	<script src="<?= site_url(); ?>assets/node_modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
	<script src="<?= site_url(); ?>assets/node_modules/select2/dist/js/select2.full.min.js"></script>
	<script src="<?= site_url(); ?>assets/node_modules/jquery-selectric/jquery.selectric.min.js"></script>
<?php
} elseif ($this->uri->segment(2) == "forms_editor") { ?>
	<script src="<?= site_url(); ?>assets/node_modules/summernote/summernote-bs4.js"></script>
	<script src="<?= site_url(); ?>assets/node_modules/codemirror/lib/codemirror.js"></script>
	<script src="<?= site_url(); ?>assets/node_modules/codemirror/mode/javascript/javascript.js"></script>
	<script src="<?= site_url(); ?>assets/node_modules/jquery-selectric/jquery.selectric.min.js"></script>
<?php
} elseif ($this->uri->segment(2) == "gmaps_advanced_route" || $this->uri->segment(2) == "gmaps_draggable_marker" || $this->uri->segment(2) == "gmaps_geocoding" || $this->uri->segment(2) == "gmaps_geolocation" || $this->uri->segment(2) == "gmaps_marker" || $this->uri->segment(2) == "gmaps_multiple_marker" || $this->uri->segment(2) == "gmaps_route" || $this->uri->segment(2) == "gmaps_simple") { ?>
	<script src="http://maps.google.com/maps/api/js?key=AIzaSyB55Np3_WsZwUQ9NS7DP-HnneleZLYZDNw&amp;sensor=true"></script>
	<script src="<?= site_url(); ?>assets/node_modules/gmaps.js"></script>
<?php
} elseif ($this->uri->segment(2) == "modules_calendar") { ?>
	<script src="<?= site_url(); ?>assets/node_modules/fullcalendar/fullcalendar.min.js"></script>
<?php
} elseif ($this->uri->segment(2) == "modules_chartjs") { ?>
	<script src="<?= site_url(); ?>assets/node_modules/chart.min.js"></script>
<?php
} elseif ($this->uri->segment(2) == "modules_datatables") { ?>
	<script src="<?= site_url(); ?>assets/node_modules/datatables/datatables.min.js"></script>
	<script src="<?= site_url(); ?>assets/node_modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
	<script src="<?= site_url(); ?>assets/node_modules/datatables/Select-1.2.4/js/dataTables.select.min.js"></script>
	<script src="<?= site_url(); ?>assets/node_modules/jquery-ui/jquery-ui.min.js"></script>
<?php
} elseif ($this->uri->segment(2) == "modules_owl_carousel") { ?>
	<script src="<?= site_url(); ?>assets/node_modules/owlcarousel2/dist/owl.carousel.min.js"></script>
<?php
} elseif ($this->uri->segment(2) == "modules_sparkline") { ?>
	<script src="<?= site_url(); ?>assets/node_modules/jquery.sparkline.min.js"></script>
<?php
} elseif ($this->uri->segment(2) == "modules_sweet_alert") { ?>
	<script src="<?= site_url(); ?>assets/node_modules/sweetalert/sweetalert.min.js"></script>
<?php
} elseif ($this->uri->segment(2) == "modules_toastr") { ?>
	<script src="<?= site_url(); ?>assets/node_modules/izitoast/js/iziToast.min.js"></script>
<?php
} elseif ($this->uri->segment(2) == "modules_vector_map") { ?>
	<script src="<?= site_url(); ?>assets/node_modules/izitoast/js/iziToast.min.js"></script>
	<script src="<?= site_url(); ?>assets/node_modules/jqvmap/dist/jquery.vmap.min.js"></script>
	<script src="<?= site_url(); ?>assets/node_modules/jqvmap/dist/maps/jquery.vmap.world.js"></script>
	<script src="<?= site_url(); ?>assets/node_modules/jqvmap/dist/maps/jquery.vmap.indonesia.js"></script>
<?php
} elseif ($this->uri->segment(2) == "auth_register") { ?>
	<script src="<?= site_url(); ?>assets/node_modules/jquery-pwstrength/jquery.pwstrength.min.js"></script>
	<script src="<?= site_url(); ?>assets/node_modules/jquery-selectric/jquery.selectric.min.js"></script>
<?php
} elseif ($this->uri->segment(2) == "features_post_create") { ?>
	<script src="<?= site_url(); ?>assets/node_modules/summernote/summernote-bs4.js"></script>
	<script src="<?= site_url(); ?>assets/node_modules/jquery-selectric/jquery.selectric.min.js"></script>
	<script src="<?= site_url(); ?>assets/node_modules/upload-preview/assets/js/jquery.uploadPreview.min.js"></script>
	<script src="<?= site_url(); ?>assets/node_modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
<?php
} elseif ($this->uri->segment(2) == "features_posts") { ?>
	<script src="<?= site_url(); ?>assets/node_modules/jquery-selectric/jquery.selectric.min.js"></script>
<?php
} elseif ($this->uri->segment(2) == "features_profile") { ?>
	<script src="<?= site_url(); ?>assets/node_modules/summernote/summernote-bs4.js"></script>
<?php
} elseif ($this->uri->segment(2) == "features_setting_detail") { ?>
	<script src="<?= site_url(); ?>assets/node_modules/codemirror/lib/codemirror.js"></script>
	<script src="<?= site_url(); ?>assets/node_modules/codemirror/mode/javascript/javascript.js"></script>
<?php
} elseif ($this->uri->segment(2) == "features_tickets") { ?>
	<script src="<?= site_url(); ?>assets/node_modules/summernote/summernote-bs4.js"></script>
	<script src="<?= site_url(); ?>assets/node_modules/chocolat/dist/js/jquery.chocolat.min.js"></script>
<?php
} elseif ($this->uri->segment(2) == "utilities_contact") { ?>
	<script src="http://maps.google.com/maps/api/js?key=AIzaSyB55Np3_WsZwUQ9NS7DP-HnneleZLYZDNw&amp;sensor=true"></script>
	<script src="<?= site_url(); ?>assets/node_modules/gmaps.js"></script>
<?php
} ?>

<!-- Page Specific JS File -->
<?php
if ($this->uri->segment(2) == "" || $this->uri->segment(2) == "index") { ?>
	<script src="<?= site_url(); ?>assets/js/page/index.js"></script>
<?php
} elseif ($this->uri->segment(2) == "index_0") { ?>
	<script src="<?= site_url(); ?>assets/js/page/index-0.js"></script>
<?php
} elseif ($this->uri->segment(2) == "bootstrap_modal") { ?>
	<script src="<?= site_url(); ?>assets/js/page/bootstrap-modal.js"></script>
<?php
} elseif ($this->uri->segment(2) == "components_chat_box") { ?>
	<script src="<?= site_url(); ?>assets/js/page/components-chat-box.js"></script>
<?php
} elseif ($this->uri->segment(2) == "components_multiple_upload") { ?>
	<script src="<?= site_url(); ?>assets/js/page/components-multiple-upload.js"></script>
<?php
} elseif ($this->uri->segment(2) == "components_statistic") { ?>
	<script src="<?= site_url(); ?>assets/js/page/components-statistic.js"></script>
<?php
} elseif ($this->uri->segment(2) == "components_table") { ?>
	<script src="<?= site_url(); ?>assets/js/page/components-table.js"></script>
<?php
} elseif ($this->uri->segment(2) == "components_user") { ?>
	<script src="<?= site_url(); ?>assets/js/page/components-user.js"></script>
<?php
} elseif ($this->uri->segment(2) == "forms_advanced_form") { ?>
	<script src="<?= site_url(); ?>assets/js/page/forms-advanced-forms.js"></script>
<?php
} elseif ($this->uri->segment(2) == "gmaps_advanced_route") { ?>
	<script src="<?= site_url(); ?>assets/js/page/gmaps-advanced-route.js"></script>
<?php
} elseif ($this->uri->segment(2) == "gmaps_draggable_marker") { ?>
	<script src="<?= site_url(); ?>assets/js/page/gmaps-draggable-marker.js"></script>
<?php
} elseif ($this->uri->segment(2) == "gmaps_geocoding") { ?>
	<script src="<?= site_url(); ?>assets/js/page/gmaps-geocoding.js"></script>
<?php
} elseif ($this->uri->segment(2) == "gmaps_geolocation") { ?>
	<script src="<?= site_url(); ?>assets/js/page/gmaps-geolocation.js"></script>
<?php
} elseif ($this->uri->segment(2) == "gmaps_marker") { ?>
	<script src="<?= site_url(); ?>assets/js/page/gmaps-marker.js"></script>
<?php
} elseif ($this->uri->segment(2) == "gmaps_multiple_marker") { ?>
	<script src="<?= site_url(); ?>assets/js/page/gmaps-multiple-marker.js"></script>
<?php
} elseif ($this->uri->segment(2) == "gmaps_route") { ?>
	<script src="<?= site_url(); ?>assets/js/page/gmaps-route.js"></script>
<?php
} elseif ($this->uri->segment(2) == "gmaps_simple") { ?>
	<script src="<?= site_url(); ?>assets/js/page/gmaps-simple.js"></script>
<?php
} elseif ($this->uri->segment(2) == "modules_calendar") { ?>
	<script src="<?= site_url(); ?>assets/js/page/modules-calendar.js"></script>
<?php
} elseif ($this->uri->segment(2) == "modules_chartjs") { ?>
	<script src="<?= site_url(); ?>assets/js/page/modules-chartjs.js"></script>
<?php
} elseif ($this->uri->segment(2) == "modules_datatables") { ?>
	<script src="<?= site_url(); ?>assets/js/page/modules-datatables.js"></script>
<?php
} elseif ($this->uri->segment(2) == "modules_ion_icons") { ?>
	<script src="<?= site_url(); ?>assets/js/page/modules-ion-icons.js"></script>
<?php
} elseif ($this->uri->segment(2) == "modules_owl_carousel") { ?>
	<script src="<?= site_url(); ?>assets/js/page/modules-slider.js"></script>
<?php
} elseif ($this->uri->segment(2) == "modules_sparkline") { ?>
	<script src="<?= site_url(); ?>assets/js/page/modules-sparkline.js"></script>
<?php
} elseif ($this->uri->segment(2) == "modules_sweet_alert") { ?>
	<script src="<?= site_url(); ?>assets/js/page/modules-sweetalert.js"></script>
<?php
} elseif ($this->uri->segment(2) == "modules_toastr") { ?>
	<script src="<?= site_url(); ?>assets/js/page/modules-toastr.js"></script>
<?php
} elseif ($this->uri->segment(2) == "modules_vector_map") { ?>
	<script src="<?= site_url(); ?>assets/js/page/modules-vector-map.js"></script>
<?php
} elseif ($this->uri->segment(2) == "auth_register") { ?>
	<script src="<?= site_url(); ?>assets/js/page/auth-register.js"></script>
<?php
} elseif ($this->uri->segment(2) == "features_post_create") { ?>
	<script src="<?= site_url(); ?>assets/js/page/features-post-create.js"></script>
<?php
} elseif ($this->uri->segment(2) == "features_posts") { ?>
	<script src="<?= site_url(); ?>assets/js/page/features-posts.js"></script>
<?php
} elseif ($this->uri->segment(2) == "features_setting_detail") { ?>
	<script src="<?= site_url(); ?>assets/js/page/features-setting-detail.js"></script>
<?php
} elseif ($this->uri->segment(2) == "utilities_contact") { ?>
	<script src="<?= site_url(); ?>assets/js/page/utilities-contact.js"></script>
<?php
} ?>

<!-- Template JS File -->
<script src="<?= site_url(); ?>assets/js/scripts.js"></script>
<script src="<?= site_url(); ?>assets/js/custom.js"></script>
</body>

</html>