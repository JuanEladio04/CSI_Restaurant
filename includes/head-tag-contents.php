<?php @include 'a_config.php' ?>
<title>
	<?php print $PAGE_TITLE; ?>
</title>

<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<meta name="description" content="" />
<meta name="author" content="" />
<!-- Favicon-->
<link rel="icon" type="..\img\logos\SmallLogoIcon.ico" href="..\img\logos\SmallLogoIcon.ico" />
<!-- Font Awesome icons (free version)-->
<script src="https://kit.fontawesome.com/eac34a33f0.js" crossorigin="anonymous"></script>
<!-- Google fonts-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Libre+Bodoni&family=Lobster+Two&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

<link href="/css/styles.css" rel="stylesheet" />

<?php
if ($CURRENT_PAGE == 'feedback') {
?>

	<meta name="description" content="Quill is a free, open source WYSIWYG editor built for the modern web. Completely customize it for any need with its modular architecture and expressive API.">

	<meta name="twitter:card" content="summary">
	<meta name="twitter:site" content="@quilljs">

	<meta name="twitter:title" content="Full Editor - Quill">

	<meta name="twitter:description" content="Quill is a free, open source rich text editor built for the modern web.">
	<meta name="twitter:image" content="https://quilljs.com/assets/images/brand-asset.png">
	<meta property="og:type" content="website">
	<meta property="og:url" content="https://quilljs.com/standalone/full/">
	<meta property="og:image" content="https://quilljs.com/assets/images/brand-asset.png">
	<meta property="og:title" content="Full Editor - Quill">
	<meta property="og:site_name" content="Quill">

	<link rel="canonical" href="https://quilljs.com/standalone/full/">
	<link type="application/atom+xml" rel="alternate" href="https://quilljs.com/feed.xml" title="Quill - Your powerful rich text editor" />


	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/KaTeX/0.7.1/katex.min.css" />

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/styles/monokai-sublime.min.css" />
<?php
}
?>

<script src="/node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>