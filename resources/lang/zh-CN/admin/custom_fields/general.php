<?php

return [
    'custom_fields'		        => '自定义字段',
    'manage'                    => '管理',
    'field'		                => '字段',
    'about_fieldsets_title'		=> '关于字段集',
    'about_fieldsets_text'		=> '字段集允许您创建经常重复用于特定资产型号类型的自定义字段组。',
    'custom_format'             => '自定义正则表达式格式...',
    'encrypt_field'      	        => '在数据库中加密此字段',
    'encrypt_field_help'      => '警告︰ 对字段的加密将导致该字段无法用于搜索',
    'encrypted'      	        => '已加密',
    'fieldset'      	        => '字段集',
    'qty_fields'      	      => '字段',
    'fieldsets'      	        => '字段集',
    'fieldset_name'           => '名称',
    'field_name'              => '名称',
    'field_values'            => '字段值',
    'field_values_help'       => '添加可选选项，每行一个。 第一行之外的空行将被忽略。',
    'field_element'           => '表单元素',
    'field_element_short'     => '表单元素',
    'field_format'            => '格式',
    'field_custom_format'     => '自定义格式',
    'field_custom_format_help'     => '此字段允许您使用正则表达式进行验证，它应该以 "regex:" 开头。例如, 要验证自定义字段值是否包含有效的 IMEI (15位数字), 则应使用 <code> regex:/^[0-9]{15} $/</code>。',
    'required'   		          => '必填',
    'req'   		              => '必填',
    'used_by_models'   		    => '引用模板',
    'order'   		            => '排序',
    'create_fieldset'         => '新增字段集',
    'update_fieldset'         => '更新字段集',
    'fieldset_does_not_exist'   => '字段集 :id 不存在',
    'fieldset_updated'         => '字段集已更新',
    'create_fieldset_title' => '创建一个新的字段集',
    'create_field'            => '新增字段',
    'create_field_title' => '创建一个新自定义字段',
    'value_encrypted'      	        => '此字段的值已被加密。只有管理员用户能够查看已解密的值',
    'show_in_email'     => '是否在发送给用户的Email中包含此字段的值？邮件中不能包含加密的值。',
    'help_text' => '帮助文本',
    'help_text_description' => '这是可选文本，在编辑一个资产以提供字段上下文时将显示在表单元素下方。',
    'about_custom_fields_title' => '关于自定义字段',
    'about_custom_fields_text' => '自定义字段允许您向资产添加任意属性。',
    'add_field_to_fieldset' => '添加字段到字段集',
    'make_optional' => '必填 - 点击转为可选项',
    'make_required' => '可选 - 点击转为必填项',
    'reorder' => '重新排序',
    'db_field' => '数据库字段',
    'db_convert_warning' => '警告。此字段作为 <code>:db_column</code> 的自定义字段表，但应该是 <code>:expected</code>。',
    'is_unique' => '此值在所有资产中必须是唯一的',
    'unique' => '唯一的',
    'display_in_user_view' => '允许借出的用户在他们的“查看已分配的资产”页面中查看这些值',
    'display_in_user_view_table' => '对用户可见',
    'auto_add_to_fieldsets' => '自动将此添加到每个新字段集',
    'add_to_preexisting_fieldsets' => '添加到任何现有的字段集',
    'show_in_listview' => '默认情况下在列表视图中显示。授权用户仍然可以通过列选择器显示或隐藏。',
    'show_in_listview_short' => '在列表中显示',

];
