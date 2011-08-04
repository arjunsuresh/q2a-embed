<?php
	class qa_embed_admin {
		
		function allow_template($template)
		{
			return ($template!='admin');
		}

		function admin_form(&$qa_content)
		{

		//	Process form input

			$ok = null;

			if (qa_clicked('embed_save')) {
				qa_opt('embed_enable',qa_post_text('embed_enable'));
				$ok = 'Settings Saved.';
			}

			
		//	Create the form for display
			
			
			$fields = array();
			
			$fields[] = array(
				'label' => 'Enable Video Embedding',
				'tags' => 'NAME="embed_enable"',
				'value' => qa_opt('embed_enable'),
				'type' => 'checkbox',
			);

			return array(
				'ok' => ($ok && !isset($error)) ? $ok : null,
				
				'fields' => $fields,
				
				'buttons' => array(
					array(
						'label' => 'Save',
						'tags' => 'NAME="embed_save"',
					)
				),
			);
		}
	}
