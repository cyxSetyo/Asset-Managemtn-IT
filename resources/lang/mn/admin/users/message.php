<?php

return array(

    'accepted'                  => 'Та энэ хөрөнгийг амжилттай хүлээн авлаа.',
    'declined'                  => 'Та энэ хөрөнгийг амжилттай татгалзсан.',
    'bulk_manager_warn'	        => 'Таны хэрэглэгчид амжилттай шинэчлэгдсэн хэдий ч таны менежерийн оруулгыг хадгалсангүй, учир нь таны сонгосон менежер засварлах хэрэглэгчийн жагсаалт мөн хэрэглэгчид магадгүй өөрийн менежер биш байж болно. Менежерийг оруулалгүйгээр хэрэглэгчдийг дахин сонгоно уу.',
    'user_exists'               => 'Хэрэглэгч бүртгэгдсэн байна!',
    'user_not_found'            => 'User does not exist.',
    'user_login_required'       => 'Нэвтрэх талбар шаардлагатай байна',
    'user_password_required'    => 'Нууц үг шаардагдана.',
    'insufficient_permissions'  => 'Зөвшөөрөлгүй байна.',
    'user_deleted_warning'      => 'Энэ хэрэглэгч устгагдсан. Та энэ хэрэглэгчийг засварлах, шинэ актив үүсгэх эрхтэй.',
    'ldap_not_configured'        => 'LDAP интеграци нь энэ суулгацыг тохируулаагүй байна.',
    'password_resets_sent'      => 'The selected users who are activated and have a valid email addresses have been sent a password reset link.',
    'password_reset_sent'       => 'A password reset link has been sent to :email!',
    'user_has_no_email'         => 'This user does not have an email address in their profile.',
    'user_has_no_assets_assigned'   => 'This user does not have any assets assigned',


    'success' => array(
        'create'    => 'Хэрэглэгч амжилттай хийгдсэн.',
        'update'    => 'Хэрэглэгч амжилттай шинэчлэгдсэн.',
        'update_bulk'    => 'Хэрэглэгчид амжилттай шинэчлэгдсэн!',
        'delete'    => 'Хэрэглэгч амжилттай устгагдсан.',
        'ban'       => 'Хэрэглэгч амжилттай хориглогдсон байна.',
        'unban'     => 'Хэрэглэгч амжилтгүй боллоо.',
        'suspend'   => 'Хэрэглэгч амжилттай зогссон.',
        'unsuspend' => 'Хэрэглэгч амжилтанд хүрсэнгүй.',
        'restored'  => 'Хэрэглэгч амжилттай сэргээгдсэн байна.',
        'import'    => 'Хэрэглэгчид амжилттай импортолсон.',
    ),

    'error' => array(
        'create' => 'Хэрэглэгч үүсгэх асуудал гарсан. Дахин оролдоно уу.',
        'update' => 'Хэрэглэгчийг шинэчлэхэд асуудал гарлаа. Дахин оролдоно уу.',
        'delete' => 'Хэрэглэгчийг устгахад асуудал гарлаа. Дахин оролдоно уу.',
        'delete_has_assets' => 'Энэ хэрэглэгчид оноосон зүйлтэй бөгөөд устгах боломжгүй байна.',
        'unsuspend' => 'Хэрэглэгчийг түдгэлзүүлэхэд асуудал үүссэн. Дахин оролдоно уу.',
        'import'    => 'Хэрэглэгч импортлох асуудал гарсан. Дахин оролдоно уу.',
        'asset_already_accepted' => 'Энэ хөрөнгийг аль хэдийн хүлээн авлаа.',
        'accept_or_decline' => 'Та энэ хөрөнгийг хүлээн зөвшөөрөх эсвэл хасах ёстой.',
        'incorrect_user_accepted' => 'Таны хүлээн авахыг оролдсон хөрөнгө таныг шалгаагүй байна.',
        'ldap_could_not_connect' => 'LDAP сервертэй холбогдож чадсангүй. LDAP серверийн тохиргоог LDAP тохиргооны файлдаа шалгана уу. <br> LDAP серверийн алдаа:',
        'ldap_could_not_bind' => 'LDAP сервертэй холбогдож чадахгүй байна. LDAP серверийн тохиргоог LDAP тохиргооны файлдаа шалгана уу. <br> LDAP серверийн алдаа:',
        'ldap_could_not_search' => 'LDAP серверийг хайж чадахгүй байна. LDAP серверийн тохиргоог LDAP тохиргооны файлдаа шалгана уу. <br> LDAP серверийн алдаа:',
        'ldap_could_not_get_entries' => 'LDAP серверээс бичилтийг авч чадсангүй. LDAP серверийн тохиргоог LDAP тохиргооны файлдаа шалгана уу. <br> LDAP серверийн алдаа:',
        'password_ldap' => 'Энэ акаунтын нууц үгийг LDAP / Active Directory удирддаг. Нууц үгээ солихын тулд өөрийн IT хэлтэст хандана уу.',
    ),

    'deletefile' => array(
        'error'   => 'Файлыг устгаагүй байна. Дахин оролдоно уу.',
        'success' => 'Файл амжилттай устгагдсан.',
    ),

    'upload' => array(
        'error'   => 'Файлд байршуулаагүй файл. Дахин оролдоно уу.',
        'success' => 'Файлууд амжилттай байршуулсан.',
        'nofiles' => 'Та байршуулах ямар ч файл сонгоогүй байна',
        'invalidfiles' => 'Таны файлуудын нэг юмуу хэд нь хэтэрхий том юмуу эсвэл файлын төрлийг зөвшөөрдөггүй. Зөвшөөрөгдсөн filetypes нь png, gif, jpg, doc, docx, pdf, болон txt байна.',
    ),

    'inventorynotification' => array(
        'error'   => 'This user has no email set.',
        'success' => 'The user has been notified about their current inventory.'
    )
);