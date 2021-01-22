           function hideOtherAdminForms(form){
	    $(form).click(function (e) {
            var exept = "form:not("+form+"_form)";
            $(exept).removeClass("open");
            $(form+"_form").addClass('open');
            });
	   }
	   
	   hideOtherAdminForms(".delete_anime");
	   hideOtherAdminForms(".ban_user");
	   hideOtherAdminForms(".add_anime");
	   hideOtherAdminForms(".aside_edit");
	   hideOtherAdminForms(".slider_edit");
	   hideOtherAdminForms(".news_edit");
	   
	    $('.add_anime_form button').click(function () {
                var title = $('#title').val();
                var year = $('#year').val();
                var genre = $('#genre').val();
                var author = $('#author').val();
                var rating = $('#rating').val();
                var description = $('#description').val();
		var poster = $("#poster");
		var fd = new FormData;
		fd.append('poster', poster.prop('files')[0]);
		const file_input = document.querySelector('input[type=file]');
		const path = file_input.value;
		const file_name = path.split(/(\\|\/)/g).pop();

		$.ajax({
		    url: 'ajax/add.php',
		    data: fd,
		    processData: false,
		    contentType: false,
		    type: 'POST',
		    success: function () {
		
			$.ajax({
			url: 'ajax/add.php',
			type: "POST",
			cache: false,
			data: {'file_name': file_name,'title': title , 'year': year, 'genre': genre, 'rating': rating, 'author': author, 'description': description},
			dataType: 'html',
			success: function(data) {
			data = data.replace(/^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g, '');

			    if(data == 'Готово') {
			    $('#successBlock').show();
			    $('#successBlock').text(data);
			    $('#errorBlock').hide();

			    }
			    else{
			    $('#successBlock').hide();
			    $('#errorBlock').show();
			    $('#errorBlock').text(data);
			    }


			    }

			    });
		    }
		});

	    });  
	    


            $('.delete_anime_form button').click(function () {
            var title = $('#titledel').val();
            $.ajax({
                url: 'ajax/delete.php',
                type: "POST",
                cache: false,
                data: {'title': title},
                dataType: 'html',
                success: function(data) {
                data = data.replace(/^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g, '');

                    if(data == 'Готово') {
                    $('#successBlock').show();
                    $('#successBlock').text(data);
                    $('#errorBlock').hide();

                    }
                    else{
                    $('#successBlock').hide();
                    $('#errorBlock').show();
                    $('#errorBlock').text(data);
                    }

                        
                    }

                    });
            });

            $('.ban_user_form button').click(function () {
            var name = $('#name').val();
            $.ajax({
                url: 'ajax/ban.php',
                type: "POST",
                cache: false,
                data: {'name': name},
                dataType: 'html',
                success: function(data) {
                data = data.replace(/^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g, '');

                    if(data == 'Готово') {
                    $('#successBlock').show();
                    $('#successBlock').text(data);
                    $('#errorBlock').hide();

                    }
                    else{
                    $('#successBlock').hide();
                    $('#errorBlock').show();
                    $('#errorBlock').text(data);
                    }

                        
                    }

                    });
            });
	    
            $('.aside_edit_form button').click(function () {
            var name = $('#name').val();
            $.ajax({
                url: 'ajax/ban.php',
                type: "POST",
                cache: false,
                data: {'name': name},
                dataType: 'html',
                success: function(data) {
                data = data.replace(/^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g, '');

                    if(data == 'Готово') {
                    $('#successBlock').show();
                    $('#successBlock').text(data);
                    $('#errorBlock').hide();

                    }
                    else{
                    $('#successBlock').hide();
                    $('#errorBlock').show();
                    $('#errorBlock').text(data);
                    }

                        
                    }

                    });
            });