window.addEventListener('DOMContentLoaded', event => {
	// Override summernotes image manager
	$('[data-ci-toggle=\'summernote\']').each(function() {
		var element = this;
		
		$(element).summernote({
			disableDragAndDrop: true,
			height: 300,
			emptyPara: '',
			dialogsFade: true,
			codemirror: { // codemirror options
				mode: 'text/html',
				htmlMode: true,
				lineNumbers: true,
				theme: 'monokai'
			},			
			fontsize: ['8', '9', '10', '11', '12', '14', '16', '18', '20', '24', '30', '36', '48' , '64'],
			toolbar: [
				['style', ['style']],
				['font', ['bold', 'underline', 'clear']],
				['fontname', ['fontname']],
				['fontsize', ['fontsize']],
				['color', ['color']],
				['para', ['ul', 'ol', 'paragraph']],
				['table', ['table']],
				['insert', ['link', 'image', 'video']],
				['view', ['fullscreen', 'codeview']]
			],
			popover: {
           		image: [
					['custom', ['imageAttributes']],
					['imagesize', ['imageSize100', 'imageSize50', 'imageSize25']],
					['float', ['floatLeft', 'floatRight', 'floatNone']],
					['remove', ['removeMedia']]
				],
			},
			callbacks: {
     onPaste: function(e) {
      console.log(e.currentTarget.innerText);
    }
  },			
			buttons: {
    			image: function() {
					var ui = $.summernote.ui;
							
					// create button
					var button = ui.button({
						contents: '<i class="note-icon-picture" />',
						tooltip: $.summernote.lang[$.summernote.options.lang].image.image,
						click: () => {
							$('#modal-image').remove();
							
							$.ajax({
								url: 'index.php/common/filemanager?user_token=' + getURLVar('user_token'),
								dataType: 'html',
								beforeSend: function() {
									$('#button-image i').replaceWith('<i class="fa fa-circle-o-notch fa-spin"></i>');
									$('#button-image').prop('disabled', true);
								},
								complete: function() {
									$('#button-image i').replaceWith('<i class="fa fa-upload"></i>');
									$('#button-image').prop('disabled', false);
								},
								success: function(html) {
									$('body').append('<div id="modal-image" class="modal">' + html + '</div>');
									
									$('#modal-image').modal('show');
									
									$('#modal-image').on('click', 'a.thumbnail', function(e) {
										e.preventDefault();
										
										$(element).summernote('insertImage', $(this).attr('href'));
																	
										$('#modal-image').modal('hide');
									});
								}
							});						
						}
					},
					{
						contents: '<i class="fab fa-html5"/>',
						tooltip: 'paste HTML',
						click: (context) => {
							html = '<div class="modal-dialog" role="document">';
							html+= '<div class="modal-content"> <div class="modal-header"><h5 class="modal-title">Paste HTML</h5>';
							html += ' <button type="button" class="close" data-dismiss="modal" aria-label="Close">';
							html += '<span aria-hidden="true">&times;</span></button></div>';
							html += '<div class="modal-body"><textarea></textarea></div>';
							html += '<div class="modal-footer"><button type="button" class="btn btn-primary">Save changes</button>';
							html += '<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button></div>';
							html += '</div>';
							$('body').append('<div id="modal-html" class="modal">' + html +'</div>');
							$('#modal-html').modal('show');
							//context.invoke('editor.pasteHTML', 'hello');
						}
					});
				
					return button.render();
				}
  			}
		});
	});
});
