<?php

	//application details
		$apps[$x]['name'] = "Time Conditions";
		$apps[$x]['uuid'] = "4b821450-926b-175a-af93-a03c441818b1";
		$apps[$x]['category'] = "Switch";
		$apps[$x]['subcategory'] = "";
		$apps[$x]['version'] = "1.0";
		$apps[$x]['license'] = "Mozilla Public License 1.1";
		$apps[$x]['url'] = "http://www.fusionpbx.com";
		$apps[$x]['description']['en-us'] = "Direct calls based on the time of day.";
		$apps[$x]['description']['ar-eg'] = "";
		$apps[$x]['description']['de-at'] = "Anrufe anhand der Tageszeit weiterleiten.";
		$apps[$x]['description']['de-de'] = "Anrufe anhand der Tageszeit weiterleiten.";
		$apps[$x]['description']['de-ch'] = "";
		$apps[$x]['description']['es-cl'] = "Direcciona llamadas basada en hora del día";
		$apps[$x]['description']['es-mx'] = "";
		$apps[$x]['description']['fr-fr'] = "Redirige les appels en fonction de l'heure.";
		$apps[$x]['description']['fr-ca'] = "";
		$apps[$x]['description']['he-il'] = "";
		$apps[$x]['description']['it-it'] = "Instrada le chiamate basandosi su giorno e ora.";
		$apps[$x]['description']['nl-nl'] = "";
		$apps[$x]['description']['pl-pl'] = "";
		$apps[$x]['description']['pt-br'] = "";
		$apps[$x]['description']['pt-pt'] = "Chamada directa com base na hora do dia.";
		$apps[$x]['description']['ro-ro'] = "";
		$apps[$x]['description']['ru-ru'] = "Прямые вызовы на основании времени суток.";
		$apps[$x]['description']['sv-se'] = "";
		$apps[$x]['description']['uk-ua'] = "";

	//destination details
		$y=0;
		$apps[$x]['destinations'][$y]['type'] = "sql";
		$apps[$x]['destinations'][$y]['label'] = "time_conditions";
		$apps[$x]['destinations'][$y]['name'] = "time_conditions";
		$apps[$x]['destinations'][$y]['sql'] = "select dialplan_name as name, dialplan_number as destination, dialplan_context as context, dialplan_description as description from v_dialplans ";
		$apps[$x]['destinations'][$y]['where'] = "where (domain_uuid = '\${domain_uuid}' or domain_uuid is null) and app_uuid = '4b821450-926b-175a-af93-a03c441818b1' and dialplan_enabled = 'true' ";
		$apps[$x]['destinations'][$y]['order_by'] = "dialplan_number asc";
		$apps[$x]['destinations'][$y]['field']['context'] = "context";
		$apps[$x]['destinations'][$y]['field']['name'] = "dialplan_name";
		$apps[$x]['destinations'][$y]['field']['destination'] = "dialplan_number";
		$apps[$x]['destinations'][$y]['field']['description'] = "dialplan_description";
		$apps[$x]['destinations'][$y]['select_value']['dialplan'] = "transfer:\${destination} XML \${context}";
		$apps[$x]['destinations'][$y]['select_value']['ivr'] = "menu-exec-app:transfer \${destination} XML \${context}";
		$apps[$x]['destinations'][$y]['select_label'] = "\${destination} \${name} \${description}";

	//permission details
		$y=0;
		$apps[$x]['permissions'][$y]['name'] = "time_condition_view";
		$apps[$x]['permissions'][$y]['menu']['uuid'] = "67aede56-8623-df2d-6338-ecfbde5825f7";
		$apps[$x]['permissions'][$y]['groups'][] = "admin";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "time_condition_add";
		$apps[$x]['permissions'][$y]['groups'][] = "admin";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "time_condition_edit";
		$apps[$x]['permissions'][$y]['groups'][] = "admin";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "time_condition_delete";
		$apps[$x]['permissions'][$y]['groups'][] = "admin";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "time_condition_domain";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "time_condition_context";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";

	//default settings
		$y=0;

	//define region presets
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "c8cbb0eb-850b-4afd-a918-cceaf8af3957";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "time_conditions";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "region";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "usa";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "What region to use by default when choosing Time Conditions";

	//define English holiday presets
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "528ec73e-03bb-4ea1-9ce1-19b81fb3f584";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "time_conditions";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "preset_england";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "array";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = '{"new_years_day":{"mday":"1","mon":"1"}}';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "England Holiday";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "420b7282-2e49-4d63-9eb3-48b3b96bc184";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "time_conditions";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "preset_england";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "array";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = '{"may_day":{"mon":"5","mday":"1-7","wday":"2"}}';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "England Holiday";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "c9ab6e93-63e0-4098-9290-7a721e813450";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "time_conditions";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "preset_england";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "array";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = '{"spring_bank_holiday":{"mon":"5","mday":"25-31","wday":"2"}}';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "England Holiday";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "b7eac3ac-a99d-4fc8-8e3e-682a17a5b463";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "time_conditions";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "preset_england";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "array";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = '{"august_bank_holiday":{"mon":"8","mday":"25-31","wday":"2"}}';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "England Holiday";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "cde53fd6-713e-43f9-beed-3cace375de56";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "time_conditions";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "preset_england";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "array";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = '{"christmas_day":{"mday":"25","mon":"12"}}';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "England Holiday";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "3ddfd3b3-5c2e-45ef-b3ca-7f361ecc0a93";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "time_conditions";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "preset_england";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "array";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = '{"boxing_day":{"mday":"26","mon":"12"}}';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "England Holiday";

	//define USA holiday presets
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "3df036bb-ae96-4735-96da-a32e90b51940";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "time_conditions";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "preset_usa";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "array";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = '{"new_years_day":{"mday":"1","mon":"1"}}';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "USA Holiday";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "7a12b17c-67d9-439e-98fb-70039d27cf21";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "time_conditions";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "preset_usa";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "array";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = '{"martin_luther_king_jr_day":{"wday":"2","mon":"1","mday":"15-21"}}';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "USA Holiday";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "1ce5c94b-7181-4b33-92b0-2cf4a97f2fa3";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "time_conditions";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "preset_usa";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "array";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = '{"presidents_day":{"wday":"2","mon":"2","mday":"15-21"}}';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "USA Holiday";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "0957bbc4-60e8-44d1-b51d-943de4ee5b2f";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "time_conditions";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "preset_usa";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "array";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = '{"memorial_day":{"mday":"25-31","wday":"2","mon":"5"}}';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "USA Holiday";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "0aa94174-a339-47d6-b6ab-c264b3786074";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "time_conditions";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "preset_usa";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "array";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = '{"independence_day":{"mday":"4","mon":"7"}}';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "USA Holiday";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "be512c08-029e-49a0-937d-1a62fc029609";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "time_conditions";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "preset_usa";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "array";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = '{"labor_day":{"wday":"2","mon":"9","mday":"1-7"}}';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "USA Holiday";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "261a0ea4-26a3-4261-95e5-888afd221ca0";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "time_conditions";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "preset_usa";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "array";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = '{"columbus_day":{"wday":"2","mon":"10","mday":"8-14"}}';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "USA Holiday";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "829d346b-b0ed-4690-8641-8ed01052e303";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "time_conditions";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "preset_usa";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "array";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = '{"veterans_day":{"mday":"11","mon":"11"}}';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "USA Holiday";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "c1fdfebe-3544-4b01-8a83-d0fee8e9a47a";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "time_conditions";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "preset_usa";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "array";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = '{"thanksgiving_day":{"wday":"5","mon":"11","mday":"22-28"}}';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "USA Holiday";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "2fcab411-971d-466c-bf6d-42f6bcd32ad2";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "time_conditions";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "preset_usa";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "array";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = '{"black_friday":{"wday":"6","mon":"11","mday":"23-29"}}';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "USA Holiday";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "82e3eb39-27a4-4d70-8436-11059d3e51e7";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "time_conditions";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "preset_usa";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "array";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = '{"christmas_day":{"mday":"25","mon":"12"}}';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "USA Holiday";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = '340856f4-ed1d-42ec-b13b-7f37630d019a';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'time_conditions';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'preset_canada';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'array';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = '{"new_years_day":{"mday":"1","mon":"1"}}';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'true';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = 'Canada Holiday';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = '74199644-5156-4e46-9069-a56413750e01';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'time_conditions';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'preset_canada';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'array';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = '{"family_day":{"wday":"2","mon":"2","mday":"15-21"}}';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'true';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = 'Canada Holiday';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = '6e848fde-8543-4410-b6f5-c387dc45fc49';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'time_conditions';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'preset_canada';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'array';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = '{"victoria_day":{"wday":"2","mon":"5","mday":"18-24"}}';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'true';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = 'Canada Holiday';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = '49bbadb3-568d-42d8-b6b4-edc9560a054d';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'time_conditions';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'preset_canada';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'array';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = '{"canada_day":{"mday":"1","mon":"7"}}';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'true';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = 'Canada Holiday';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = '39c69aa6-124c-405e-a437-b49e379a7079';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'time_conditions';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'preset_canada';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'array';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = '{"bc_day":{"wday":"2","mon":"8","mday":"1-7"}}';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'true';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = 'Canada Holiday';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = '2eed38e8-11c3-4477-9185-103c36ccf26d';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'time_conditions';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'preset_canada';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'array';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = '{"thanksgiving_day":{"wday":"2","mon":"10","mday":"8-14"}}';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'true';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = 'Canada Holiday';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = 'c3244258-55fe-4d20-a23d-ac9e108bf38e';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'time_conditions';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'preset_canada';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'array';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = '{"remembrance_day":{"mday":"11","mon":"11"}}';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'true';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = 'Canada Holiday';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = '51717873-86d2-43a2-8748-ff191b4915e7';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'time_conditions';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'preset_canada';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'array';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = '{"christmas_day":{"mday":"25","mon":"12"}}';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'true';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = 'Canada Holiday';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = 'a96c087a-503c-4b7c-87af-dff24d5d39c1';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'time_conditions';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'preset_canada';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'array';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = '{"boxing_day":{"mday":"26","mon":"12"}}';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'true';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = 'Canada Holiday';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = '43ef3137-084a-40ea-94ed-42b68979c551';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'time_conditions';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'preset_canada';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'array';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = '{"labour_day":{"wday":"2","mon":"9","mday":"1-7"}}';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'true';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = 'Canada Holiday';

	//cache details
		$apps[$x]['cache']['key'] = "dialplan.\${dialplan_context}";

?>
