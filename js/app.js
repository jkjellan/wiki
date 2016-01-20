window.addEventListener('load', function() {
    var editor;

	ContentTools.StylePalette.add([
		new ContentTools.Style('Muted', 'text-muted', ['p']),
		new ContentTools.Style('Primary', 'text-primary', ['p']),
		new ContentTools.Style('Success', 'text-success', ['p'])
	]);

	editor = ContentTools.EditorApp.get();
	editor.init('*[data-editable]', 'data-name');

});
