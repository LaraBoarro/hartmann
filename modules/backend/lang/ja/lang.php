<?php

return [
    'auth' => [
        'title' => 'システム管理者領域',
        'invalid_login' => '入力された内容は、存在しませんでした。再度ご確認の上、お試しください。',
    ],
    'field' => [
        'invalid_type' => '無効なフィールドタイプ :type が使用されています。',
        'options_method_not_exists' => "モデルクラスの:modelは、':field'フォームフィールドのためにオプションを返す、:method()メソッドを定義しなくてはなりません。",
        'options_method_invalid_model' => "属性 ':field' は有効なモデルに解決されません。モデルクラス :model のオプションメソッドを明示的に指定してみてください。",
        'options_static_method_invalid_value' => "class の静的メソッド ':method()' が有効なオプション配列を返しませんでした。",
        'colors_method_not_exists' => "モデルクラス :model は、フォームフィールド ':field' の html カラー HEX コードを返すメソッド :method() を定義する必要があります。",
    ],
    'widget' => [
        'not_registered' => "':name'は、ウィジット名として登録されていません。",
        'not_bound' => "ウィジットクラス名の':name'は、コントローラーと結び付けられていません。",
    ],
    'page' => [
        'untitled' => 'タイトル無し',
        '404' => [
            'label' => 'Page Not Found（ページが見つかりません）。',
            'help' => '検索しましたが、要求されたURLは見つかりませんでした。おそらく他のものをお探しだったのでしょう。',
            'back_link' => '前のページに戻る',
        ],
        'access_denied' => [
            'label' => 'アクセスが拒否されました',
            'help' => 'このページを表示するために必要な権限がありません。',
            'cms_link' => 'CMSのバックエンドに行く',
        ],
        'no_database' => [
            'label' => 'データベースがありません',
            'help' => 'バックエンドにアクセスするためにデータベースが必要です。再試行する前に、データベースが設定され、移行されていることを確認してください。',
            'cms_link' => 'ホームページに戻る',
        ],
    ],
    'partial' => [
        'not_found_name' => "':name'パーシャルは見つかりません。",
        'invalid_name' => "無効なパーシャル名: :name",
    ],
    'ajax_handler' =>[
        'invalid_name' => "無効なAJAXハンドラ名: :name",
        'not_found' => "AJAXハンドラ ':name' が見つかりませんでした。",
    ],
    'account' => [
        'sign_out' => 'ログアウト',
        'login' => 'ログイン',
        'reset' => 'リセット',
        'restore' => '元に戻す',
        'login_placeholder' => 'ユーザー名',
        'password_placeholder' => 'パスワード',
        'forgot_password' => 'パスワードを忘れましたか？',
        'enter_email' => 'メールアドレスを入力してください',
        'enter_login' => 'ユーザー名を入力してください',
        'email_placeholder' => 'メールアドレス',
        'enter_new_password' => '新しいパスワードを入力してください',
        'password_reset' => 'パスワードリセット',
        'restore_success' => 'パスワードを元に戻すための手順を説明したメールを送信しました。',
        'reset_success' => 'パスワードがリセットされました。',
        'reset_error' => '間違ったパスワードリセットデータが送信されました。再実行してください。',
        'reset_fail' => 'パスワードをリセットできませんでした。',
        'apply' => '適用',
        'cancel' => 'キャンセル',
        'delete' => '削除',
        'ok' => 'OK',
        'impersonate' => 'このユーザーに偽装する',
        'impersonate_confirm' => '本当にこのユーザーになりすましますか？ログアウトすれば、元の状態に戻せます。',
        'impersonate_success' => 'あなたは今、このユーザーになりすましています',
        'impersonate_working' => 'なりすまし中...',
        'impersonating' => "あなたは一時的に :impersonatee としてログインしています。ログからはまだ :impersonator として識別することができます。",
        'stop_impersonating' => 'なりすましをやめる',
        'unsuspend' => '利用停止',
        'unsuspend_confirm' => '本当にこのユーザーの利用停止を解除しますか?',
        'unsuspend_success' => 'ユーザーが利用可能になりました。',
        'unsuspend_working' => '利用停止解除中...',
        'signed_in_as' => "サインイン名 :full_name",
        'remember_me' => 'ログインしたままにする',
    ],
    'dashboard' => [
        'menu_label' => 'ダッシュボード',
        'widget_label' => 'ウィジェット',
        'widget_width' => 'ウィジェット幅',
        'full_width' => '全幅',
        'add_widget' => 'ウィジェットの追加',
        'widget_inspector_title' => 'ウィジェットの設定',
        'widget_inspector_description' => 'リポートウィジェットを設定します。',
        'widget_columns_label' => '幅 :columns',
        'widget_columns_description' => 'ウィジェット幅は1〜10の数字で指定してします。',
        'widget_columns_error' => 'ウィジェット幅は1〜10の数字で指定してください。',
        'columns' => '{1} カラム|[2,Inf] カラム',
        'widget_new_row_label' => '次の行に配置',
        'widget_new_row_description' => 'ウィジェットを次の行に配置します。',
        'widget_title_label' => 'ウィジェットタイトル',
        'widget_title_error' => 'ウィジェットタイトルを指定してください。',
        'manage_widgets' => 'ウィジェットの管理',
        'reset_layout' => 'レイアウトをリセット',
        'reset_layout_confirm' => 'レイアウトをデフォルトに戻す？',
        'reset_layout_success' => 'レイアウトがリセットされました',
        'make_default' => 'デフォルトにする',
        'make_default_confirm' => '現在のレイアウトをデフォルトに設定しますか？',
        'make_default_success' => '現在のレイアウトがデフォルトになりました。',
        'collapse_all' => 'すべて閉じる',
        'expand_all' => 'すべて展開する',
        'status' => [
            'widget_title_default' => 'システム状態',
            'update_available' => '{0}個のアップデートが見つかりました。|{1} 個のアップデートが見つかりました。|[2,Inf] 個のアップデートが見つかりました。',
            'updates_pending' => 'ソフトウェアの更新が保留中',
            'updates_nil' => 'ソフトウェアは最新です',
            'updates_link' => 'アップデート',
            'warnings_pending' => 'いくつかの問題は注意が必要です',
            'warnings_nil' => '表示する警告がありません',
            'warnings_link' => '表示',
            'core_build' => 'システムビルド',
            'event_log' => 'イベントログ',
            'request_log' => 'リクエストログ',
            'app_birthday' => 'オンライン以来',
        ],
        'welcome' => [
            'widget_title_default' => 'ようこそ',
            'welcome_back_name' => 'お帰りなさい、:app, :name.',
            'welcome_to_name' => 'ようこそ、:app, :name.へ',
            'first_sign_in' => '今回が初めてのログインです',
            'last_sign_in' => '前回のサインインは',
            'view_access_logs' => 'アクセスログを見る',
            'nice_message' => '良い一日を!!',
        ],
    ],
    'user' => [
        'name' => 'システム管理者',
        'menu_label' => 'システム管理者',
        'menu_description' => 'バックエンドの管理ユーザーとグループ、権限の管理。',
        'list_title' => 'システム管理者の管理',
        'new' => '新規システム管理者',
        'login' => 'ログイン',
        'first_name' => '名',
        'last_name' => '姓',
        'full_name' => '姓名',
        'email' => 'メールアドレス',
        'groups' => 'グループ',
        'groups_comment' => 'このユーザーが所属するグループを指定してください。',
        'avatar' => 'アバター',
        'password' => 'パスワード',
        'password_confirmation' => 'パスワード確認',
        'permissions' => '権限',
        'superuser' => 'スーパーユーザー',
        'superuser_comment' => '全領域へのアクセスをこのユーザーに許可する場合、ボックスをチェックしてください。',
        'send_invite' => 'メールにより招待送信',
        'send_invite_comment' => 'このユーザーに、メールで招待状を送る場合、ボックスをチェックしてください。',
        'delete_confirm' => 'この管理者を本当に削除しますか？',
        'return' => 'システム管理者リストに戻る',
        'allow' => '許可',
        'inherit' => '継承',
        'deny' => '拒否',
        'role_field' => 'ロール',
        'role_comment' => 'ロールはユーザー権限を定義し、権限タブでユーザーレベルで上書きすることができます',
        'account' => 'アカウント',
        'activated' => 'アクティベートされた',
        'last_login' => '最終ログイン',
        'created_at' => '作成日',
        'updated_at' => '更新日',
        'deleted_at' => '削除日',
        'show_deleted' => '削除済み表示',
        'group' => [
            'name' => 'グループ',
            'name_field' => '名前',
            'name_comment' => 'この名前は、管理者フォームのグループリストに表示されます。',
            'description_field' => '説明',
            'is_new_user_default_field' => 'デフォルトで新しいシステム管理者をこのグループに追加する。',
            'is_new_user_default_field_label' => 'デフォルトグループ',
            'is_new_user_default_field_comment' => '新しい管理者をこのグループにデフォルトで追加する',
            'code_field' => 'コード',
            'code_comment' => 'もしあなたがAPIでアクセスしたい場合は、ユニークなコードを入力してください。',
            'menu_label' => 'グループ',
            'list_title' => 'グループ管理',
            'new' => '新規グループ',
            'delete_confirm' => '本当にこの管理者グループを削除しますか？',
            'return' => 'グループリストへ戻る',
            'users_count' => 'ユーザー数',
        ],
        'role' => [
            'name' => 'ロール',
            'name_field' => '名前',
            'name_comment' => 'この名前は、管理者フォームのロールリストに表示されます。',
            'description_field' => '説明',
            'code_field' => 'コード',
            'code_comment' => 'APIでロールオブジェクトにアクセスする場合は、一意のコードを入力してください。',
            'menu_label' => 'ロール管理',
            'list_title' => 'ロール管理',
            'new' => '新しいロール',
            'delete_confirm' => 'この管理者ロールを削除しますか?',
            'return' => 'ロール一覧に戻る',
            'users_count' => 'ユーザー一覧',
        ],
        'preferences' => [
            'not_authenticated' => '設定を読み込み／保存する、認証されたユーザーが存在していません。',
        ],
        'trashed_hint_title' => 'このアカウントは削除されました',
        'trashed_hint_desc' => 'このアカウントは削除され、このアカウントでサインインすることはできません。復元するには、右下のユーザー復元アイコンをクリックします。',
    ],
    'list' => [
        'default_title' => 'リスト',
        'search_prompt' => '検索...',
        'no_records' => 'このビューにはレコードがありません。',
        'missing_model' => ':classクラスの中のリストビヘイビアーにモデルがありません。',
        'missing_column' => ':columnsに対する、カラム定義がありません。',
        'missing_columns' => ':classクラスの中のリストには、リストするカラムが定義されていません。',
        'missing_definition' => "リストビヘイビアーは、':field'に対するカラムを持っていません。",
        'missing_parent_definition' => "リストビヘイビアに':definition'の定義がありません。",
        'behavior_not_ready' => 'リストビヘイビアーは初期化されていません。コントローラーで、makeLists()を呼び出しているか確認してください。',
        'invalid_column_datetime' => "カラムの値 ':column' はDateTimeオブジェクトではありません。モデル内の \$dates に指定していますか？",
        'pagination' => '表示中のレコード: :from-:to / :total',
        'first_page' => '初めのページ',
        'last_page' => '最後のページ',
        'prev_page' => '前のページ',
        'next_page' => '次のページ',
        'loading' => 'ロード中...',
        'refresh' => 'リフレッシュ',
        'updating' => '更新中',
        'setup_title' => 'リストのセットアップ',
        'setup_help' => 'リストの表示したいカラムをチェックボックスで選択してください。カラムの位置は上下にドラッグして変更できます。',
        'records_per_page' => 'ページ中のレコード数',
        'records_per_page_help' => 'ページあたりの表示レコード数を選択してください。1ページにたくさん表示するとパフォーマンスに影響があるので留意してください。',
        'check' => 'チェック',
        'delete_selected' => '選択した項目を削除する',
        'delete_selected_empty' => '削除する選択されたレコードはありません。',
        'delete_selected_confirm' => '選択したレコードを削除しますか？',
        'delete_selected_success' => '選択したレコードを削除しました。',
        'column_switch_true' => 'Yes',
        'column_switch_false' => 'No',
    ],
    'fileupload' => [
        'attachment' => '添付',
        'help' => 'この添付のタイトルと説明を追加します。',
        'title_label' => 'タイトル',
        'description_label' => '説明',
        'default_prompt' => '%s をクリックするか、ここにファイルをドラッグしてアップロードしてください。',
        'attachment_url' => '添付ファイルURL',
        'upload_file' => 'ファイルのアップロード',
        'upload_error' => 'アップロードエラー',
        'remove_confirm' => '本当によろしいですか?',
        'remove_file' => 'ファイルを削除する',
    ],
    'repeater' => [
        'add_new_item' => '新規アイテム',
        'min_items_failed' => ':name は最低でも :min の項目が必要ですが、:item しか提供されていません。',
        'max_items_failed' => ':name は :max items までしか許可しないが、:item は提供された。',
    ],
    'form' => [
        'create_title' => '新規 :name',
        'update_title' => '編集 :name',
        'preview_title' => 'プレビュー :name',
        'create_success' => ':nameを作成しました。',
        'update_success' => ':nameを更新しました。',
        'delete_success' => ':nameを削除しました。',
        'restore_success' => ':nameを復元しました。',
        'reset_success' => 'リセット完了しました。',
        'missing_id' => 'フォームのレコードIDが指定されていません。',
        'missing_model' => ':classクラスで使用している、フォームビヘイビアーは、モデル定義を持っていません。',
        'missing_definition' => "フォームビヘイビアーは、':field'フィールドを持っていません。",
        'not_found' => 'IDが:idのフォームレコードが見つかりません。',
        'action_confirm' => '削除していいですか？',
        'create' => '作成',
        'create_and_close' => '作成後閉じる',
        'creating' => '作成中...',
        'creating_name' => ':name を作成中...',
        'save' => '保存',
        'save_and_close' => '保存後閉じる',
        'saving' => '保存中...',
        'saving_name' => ':name を保存中...',
        'delete' => '削除',
        'deleting' => '削除中...',
        'confirm_delete' => 'レコードを削除しますか?',
        'confirm_delete_multiple' => '選択したレコードを削除しますか?',
        'deleting_name' => ':name を削除中...',
        'restore' => '復元',
        'restoring' => '復元中...',
        'confirm_restore' => '本当にこのレコードを復元するのですか？',
        'reset_default' => '初期値にリセット',
        'resetting' => 'リセット',
        'resetting_name' => ':name を初期値にリセット中...',
        'undefined_tab' => 'その他',
        'field_off' => '無効',
        'field_on' => '',   // MEMO あえて空文字列にしています。
        'add' => 'Add',
        'apply' => '適用',
        'cancel' => 'キャンセル',
        'close' => '閉じる',
        'confirm' => '確認',
        'reload' => 'リロード',
        'complete' => '完了',
        'ok' => 'OK',
        'or' => 'または',
        'confirm_tab_close' => '本当にタブを閉じますか？ 保存されていない変更は消えてしまいます。',
        'behavior_not_ready' => 'フォームビヘイビアーは初期化されていません。コントローラーでinitForm()を呼び出しているか確認してください。',
        'preview_no_files_message' => 'ファイルはアップロードされません。',
        'preview_no_media_message' => '選択されたメディアはありません。',
        'preview_no_record_message' => '選択されたレコードはありません',
        'select' => '選択',
        'select_all' => 'すべて選択',
        'select_none' => 'どれも選択しない',
        'select_placeholder' => '選択してください',
        'insert_row' => '行を挿入',
        'insert_row_below' => '下の行を挿入する',
        'delete_row' => '行を削除',
        'concurrency_file_changed_title' => 'ファイルは変更されていません。',
        'concurrency_file_changed_description' => '編集中のファイルが他のユーザーにより変更されました。リロードして加えた変更を破棄するか、そのまま上書きできます。',
        'return_to_list' => 'リストに戻る',
    ],
    'recordfinder' => [
        'find_record' => 'レコードの検索',
        'invalid_model_class' => 'レコードファインダーのモデルクラス":modelClass "が無効です。',
        'cancel' => 'キャンセル',
    ],
    'pagelist' => [
        'page_link' => 'ページリンク',
        'select_page' => 'ページを選択してください...',
    ],
    'relation' => [
        'missing_config' => "リレーションビヘイビアは、':config'に対する設定を持っていません。",
        'missing_definition' => "リレーションビヘイビアは、':field'フィールドに対する定義を持っていません。",
        'missing_model' => ':classクラスで使用している、リレーションビヘイビアは、モデル定義を持っていません。',
        'invalid_action_single' => 'このアクションは、単一リレーションでは実行できません。',
        'invalid_action_multi' => 'このアクションは、複数リレーションでは実行できません。',
        'relationwidget_unsupported_type' => 'リレーションタイプ「:type」はリレーションウィジェットではサポートされていません',
        'help' => '項目をクリックすると追加されます。',
        'related_data' => '関連するデータ :name',
        'add' => '追加',
        'add_name' => '追加 :name',
        'add_selected' => '追加は選択されています',
        'add_a_new' => '新しい追加 :name',
        'link_selected' => 'リンクは選択されています',
        'link_a_new' => '新しいリンク :name',
        'cancel' => 'キャンセル',
        'close' => '閉じる',
        'create' => '作成',
        'create_name' => '作成 :name',
        'update' => '更新',
        'update_name' => '更新 :name',
        'preview' => 'プレビュー',
        'preview_name' => 'プレビュー :name',
        'remove' => '削除',
        'remove_name' => '削除 :name',
        'delete' => '削除',
        'delete_name' => '削除 :name',
        'delete_confirm' => '削除していいですか？',
        'link' => 'リンク',
        'link_name' => 'リンク :name',
        'unlink' => 'リンク解除',
        'unlink_name' => 'リンク解除 :name',
        'unlink_confirm' => 'リンクを解除していいですか？',
    ],
    'reorder' => [
        'default_title' => 'レコードの並べ替え',
        'no_records' => 'ソート可能なレコードはありません。',
    ],
    'model' => [
        'name' => 'モデル',
        'not_found' => "IDが:idの、':class'モデルは見つかりません。",
        'missing_id' => 'モデルレコードを探すためのIDが、指定されていません。',
        'missing_relation' => "':class'モデルは、':relation'の定義を持っていません。",
        'missing_method' => "モデル ':class' にメソッド ':method' は定義されていません。",
        'invalid_class' => ':classクラスで使用している、:modelモデルは正しくありません。\Modelクラスを継承してください。',
        'mass_assignment_failed' => "モデル属性':attribute'の一括設定に失敗しました。",
    ],
    'warnings' => [
        'tips' => 'システム構成のチップス',
        'tips_description' => 'あなたが、システムを適切に設定するために注意を払う必要がある問題があります。',
        'permissions'  => 'ディレクトリ":name"またはそのサブディレクトリは、PHPから書き込みできません。このディレクトリのパーミッションを設定してください。',
        'extension' => 'PHP拡張":name"はインストールされていません。PHP拡張をインストールして有効にしてください。',
        'plugin_missing' => 'プラグイン :name は依存関係にありますが、インストールされていません。このプラグインをインストールしてください。',
        'debug' => 'デバッグモードが有効です。これは、実稼働環境でのインストールにはお勧めしません。',
        'decompileBackendAssets' => '現在、Backendのアセットがデコンパイルされています。これは、実稼働環境でのインストールにはお勧めしません。',
        'default_backend_user' => 'デフォルトのログイン情報を持つユーザー（admin / admin@domain.tld）が見つかりました。システムを保護するために、ユーザー名および/またはメールアドレスを変更してください。',
    ],
    'editor' => [
        'menu_label' => 'エディタ',
        'menu_description' => 'コードエディタ設定の管理',
        'preview' => 'プレビュー',
        'font_size' => 'フォントサイズ',
        'tab_size' => 'タブサイズ',
        'use_hard_tabs' => 'インデントにタブを使用する',
        'code_folding' => 'コード折りたたみ',
        'code_folding_begin' => 'マーク開始',
        'code_folding_begin_end' => '開始と終了のマーク',
        'autocompletion' => 'オートコンプリート',
        'word_wrap' => 'ワードラップ',
        'highlight_active_line' => '選択行のハイライト',
        'auto_closing' => 'タグを自動で閉じる',
        'show_invisibles' => '見えない文字を表示する',
        'show_gutter' => '行番号を表示する',
        'basic_autocompletion' => '基本的なオートコンプリート（Ctrl + Space）',
        'live_autocompletion' => 'ライブオートコンプリート',
        'enable_snippets' => 'コードスニペットを有効にする（タブ）',
        'display_indent_guides' => 'インデントガイドを表示する',
        'show_print_margin' => 'プリントマージンを表示する',
        'mode_off' => 'オフ',
        'mode_fluid' => 'Fluid',
        '40_characters' => '40文字',
        '80_characters' => '80文字',
        'theme' => 'カラーテーマ',
        'markup_styles' => 'マークアップ・スタイル',
        'custom_styles' => 'カスタムスタイルシート',
        'custom_styles_comment' => 'HTMLエディタに含めるカスタムスタイル',
        'markup_classes' => 'マークアップクラス',
        'paragraph' => '段落',
        'link' => 'リンク',
        'table' => 'テーブル',
        'table_cell' => 'テーブルセル',
        'image' => 'イメージ',
        'label' => 'ラベル',
        'class_name' => 'クラス名',
        'markup_tags' => 'マークアップタグ',
        'markup_tag' => 'マークアップタグ',
        'allowed_empty_tags' => '許可されたからのタグ',
        'allowed_empty_tags_comment' => '内部に内容がない場合に削除されないタグのリスト',
        'allowed_tags' => '許可されたタグ',
        'allowed_tags_comment' => '許可されたタグのリスト',
        'allowed_attributes' => '許可された属性',
        'allowed_attributes_comment' => '許可された属性のリスト',
        'no_wrap' => 'タグを折り返さない',
        'no_wrap_comment' => 'ブロックタグの内側にラップしてはいけないタグのリスト',
        'remove_tags' => 'タグを削除する',
        'remove_tags_comment' => '内容とともに削除されるタグのリスト',
        'line_breaker_tags' => '改行タグ',
        'line_breaker_tags_comment' => '改行要素の間に配置するためのタグのリストです。',
        'toolbar_options' => 'ツールバーオプション',
        'toolbar_buttons' => 'ツールバーボタン',
        'toolbar_buttons_comment' => 'リッチエディタにデフォルトで表示されるツールバーボタン',
        'toolbar_buttons_preset' => 'プリセットのツールバーボタン構成を挿入します',
        'toolbar_buttons_presets' => [
            'default' => 'デフォルト',
            'minimal' => '最小',
            'full' => 'フル',
        ],
        'paragraph_formats' => '段落の書式',
        'paragraph_formats_comment' => '段落形式のドロップダウンに表示されるオプション',

    ],
    'tooltips' => [
        'preview_website' => 'Webサイトをプレビューする',
    ],
    'mysettings' => [
        'menu_label' => 'マイ設定',
        'menu_description' => 'この管理者アカウントの設定をします。',
    ],
    'myaccount' => [
        'menu_label' => 'アカウント',
        'menu_description' => '名前、電子メールアドレス、パスワードなどのあなたのアカウント詳細をアップデートしてください。',
        'menu_keywords' => 'セキュリティ ログイン',
    ],
    'branding' => [
        'menu_label' => 'バックエンドのカスタマイズ',
        'menu_description' => 'システム管理者領域を設定します。例えば、名前や色、ロゴ。',
        'brand' => 'ブランド',
        'logo' => 'ロゴ',
        'logo_description' => 'バックエンドで使用するロゴをアップロードします。',
        'favicon' => 'Favicon',
        'favicon_description' => 'バックエンドで使用するカスタムファビコンをアップロードする',
        'app_name' => 'アプリ名',
        'app_name_description' => 'この名前はバックエンドのタイトル領域に表示されます。',
        'app_tagline' => 'アプリタグライン',
        'app_tagline_description' => 'この名前はバックエンドのサインインページに表示されます。',
        'colors' => '配色',
        'branding_colors' => 'ブランディングカラー',
        'branding_colors_comment' => 'これらの色は、あなたのブランディングに合わせてBackend UI全体で使用されます',
        'default_colors' => 'デフォルトカラー',
        'default_colors_comment' => 'これらの色は、オーバーライドされない限り、すべてのカラーピッカーでスウォッチとして利用できます。',
        'add_default_color' => 'デフォルトカラーを追加する',
        'primary_color' => 'プライマリ color',
        'secondary_color' => 'セカンダリ color',
        'accent_color' => 'Accent color',
        'styles' => 'スタイル',
        'custom_stylesheet' => 'カスタムスタイルシート',
        'navigation' => 'ナビゲーション',
        'menu_mode' => 'メニューのスタイル',
        'menu_mode_inline' => 'インライン',
        'menu_mode_inline_no_icons' => 'インライン (アイコンなし)',
        'menu_mode_tile' => 'タイル',
        'menu_mode_collapsed' => '折りたたみ',
    ],
    'backend_preferences' => [
        'menu_label' => 'バックエンド設定',
        'menu_description' => '言語の設定などを行います。',
        'region' => '地域',
        'code_editor' => 'コードエディター',
        'timezone' => 'タイムゾーン',
        'timezone_comment' => '表示されている日付をこのタイムゾーンに合わせる。',
        'locale' => 'ロケール',
        'locale_comment' => '使用する言語のロケールを選択してください。',
    ],
    'access_log' => [
        'hint' => 'このログは管理者のサインインが成功したリストです。記録は:days日間保持されます。',
        'menu_label' => 'アクセスログ',
        'menu_description' => 'サインインに成功したバックエンドユーザーを表示します。',
        'type' => 'タイプ',
        'created_at' => '日時',
        'login' => 'ログイン',
        'ip_address' => 'IPアドレス',
        'first_name' => '名',
        'last_name' => '姓',
        'email' => 'メール',
    ],
    'filter' => [
      'all' => 'すべて',
      'options_method_not_exists' => "モデルクラス :model は ':filter' フィルタのオプションを返すメソッド :method() を定義する必要があります。",
      'date_all' => '全期間',
      'number_all' => '全数',
    ],
    'import_export' => [
        'upload_csv_file' => '1.CSVファイルをアップロードする',
        'import_file' => 'インポートファイル',
        'row' => '行 :row',
        'first_row_contains_titles' => '最初の行には列のタイトルが含まれています。',
        'first_row_contains_titles_desc' => 'CSVの最初の行を列タイトルとして使用する場合は、これをチェックしたままにしてください。',
        'match_columns' => '2.ファイルのカラムとデータベースのフィールドを一致させる',
        'file_columns' => 'ファイルのカラム',
        'database_fields' => 'データベース・フィールド',
        'set_import_options' => '3.インポートオプションの設定',
        'export_output_format' => '1.エクスポートの出力形式',
        'file_format' => 'ファイル形式',
        'standard_format' => '標準のフォーマット',
        'custom_format' => 'カスタムフォーマット',
        'delimiter_char' => 'デリミタ文字',
        'enclosure_char' => '囲み文字',
        'escape_char' => 'エスケープ文字',
        'select_columns' => '2.エクスポートする列を選択する',
        'column' => '列',
        'columns' => '列',
        'set_export_options' => '3.エクスポートオプションの設定',
        'show_ignored_columns' => '無視された列を表示する',
        'auto_match_columns' => '自動一致する列',
        'created' => '作成された',
        'updated' => '更新',
        'skipped' => 'スキップ',
        'warnings' => '警告',
        'errors' => 'エラー',
        'skipped_rows' => 'スキップされた行',
        'import_progress' => 'インポート進捗状況',
        '処理' => '処理',
        'import_error' => 'インポートエラー',
        'upload_valid_csv' => '有効なCSVファイルをアップロードしてください',
        'drop_column_here' => 'ここにカラムをドロップしてください...',
        'ignore_this_column' => 'このカラムは無視します',
        'processing_successful_line1' => 'ファイルエクスポート処理完了！',
        'processing_successful_line2' => 'ブラウザはファイルのダウンロードにリダイレクトします',
        'export_progress' => 'エクスポートの進捗状況',
        'export_error' => 'エクスポートのエラー',
        'column_preview' => '列のプレビュー',
        'file_not_found_error' => 'ファイルが見つかりません',
        'empty_error' => 'エクスポートに提供されたデータがありません',
        'empty_import_columns_error' => 'インポートする列をいくつか指定してください',
        'match_some_column_error' => '最初にいくつかのカラムをマッチさせてください。',
        'required_match_column_error' => '必須フィールド:labelにマッチするものをご指定ください。',
        'empty_export_columns_error' => 'エクスポートするカラムをいくつか指定してください',
        'behavior_missing_uselist_error' => 'コントローラの動作であるListControllerを、エクスポートの「useList」オプションを有効にして実装しなければなりません',
        'missing_model_class_error' => ':typeにmodelClassプロパティを指定してください',
        'missing_column_id_error' => 'カラムの識別子がありません',
        'unknown_column_error' => '不明なカラム',
        'encoding_not_supported_error' => 'ソースファイルのエンコーディングが認識されません。ファイルをインポートするには、適切なエンコーディングのカスタムファイル形式オプションを選択してください',
        'encoding_format' => 'ファイルのエンコーディング',
        'エンコーディング' => [
            'utf_8' => 'UTF-8',
            'us_ascii' => 'US-ASCII',
            'iso_8859_1' => 'ISO-8859-1 (Latin-1, 西ヨーロッパ)',
            'iso_8859_2' => 'ISO-8859-2 (Latin-2, 中央ヨーロッパ)',
            'iso_8859_3' => 'ISO-8859-3 (ラテン語-3、南ヨーロッパ)',
            'iso_8859_4' => 'ISO-8859-4 (ラテン語-4, 北欧)',
            'iso_8859_5' => 'ISO-8859-5 (ラテン語、キリル文字)',
            'iso_8859_6' => 'ISO-8859-6（ラテン語、アラビア語）',
            'iso_8859_7' => 'ISO-8859-7 (ラテン語、ギリシャ語)',
            'iso_8859_8' => 'ISO-8859-8 (ラテン語、ヘブライ語)',
            'iso_8859_9' => 'ISO-8859-9 (Latin-5, トルコ語)',
            'iso_8859_10' => 'ISO-8859-10 (Latin-6, Nordic)',
            'iso_8859_11' => 'ISO-8859-11 (ラテン語、タイ語)',
            'iso_8859_13' => 'ISO-8859-13 (Latin-7, Baltic Rim)',
            'iso_8859_14' => 'ISO-8859-14 (Latin-8, Celtic)',
            'iso_8859_15' => 'ISO-8859-15 (Latin-9, ユーロ記号を含む西ヨーロッパ修正)',
            'windows_1250' => 'Windows-1250 (CP1250、中・東欧系)',
            'windows_1251' => 'Windows-1251 (CP1251)',
            'windows_1252' => 'Windows-1252 (CP1252)',
        ],
    ],
    'permissions' => [
        'manage_media' => 'メディアコンテンツ（画像、動画、音声、ドキュメント）のアップロードと管理',
        'allow_unsafe_markdown' => '安全でないMarkdownを使用する（Javascriptを含むことができる）',
    ],
    'mediafinder' => [
        'label' => 'メディアファインダー',
        'default_prompt' => 'メディアアイテムを探すには%sボタンをクリックします',
        'no_image' => '画像が見つかりませんでした',
    ],
    'media' => [
        'menu_label' => 'メディア',
        'アップロード' => 'アップロード',
        'move' => '移動',
        'delete' => '削除',
        'add_folder' => 'フォルダの追加',
        'search' => '検索',
        'display' => '表示',
        'filter_everything' => 'すべて',
        'filter_images' => '画像',
        'filter_video' => 'ビデオ',
        'filter_audio' => 'オーディオ',
        'filter_documents' => 'Documents',
        'library' => 'ライブラリ',
        'size' => 'サイズ',
        'title' => 'タイトル',
        'last_modified' => '最終更新日',
        'public_url' => 'URL',
        'click_here' => 'ここをクリック',
        'thumbnail_error' => 'サムネイルの生成に失敗しました',
        'return_to_parent' => '親フォルダに戻る',
        'return_to_parent_label' => '上に行く ...',
        'nothing_selected' => '何も選択されていません',
        'multiple_selected' => '複数の項目が選択されています',
        'uploading_file_num' => 'ファイル(複数可)をアップロードしています...',
        'uploading_complete' => 'アップロードが完了しました',
        'uploading_error' => 'アップロードに失敗しました',
        'type_blocked' => '使用されているファイルタイプはセキュリティ上の理由でブロックされています',
        'order_by' => '順序',
        'direction' => '方向',
        'direction_asc' => '昇順',
        'direction_desc' => '降順',
        'folder' => 'フォルダ',
        'no_files_found' => 'リクエストによってファイルが見つかりませんでした',
        'delete_empty' => '削除する項目を選択してください',
        'delete_confirm' => '選択したアイテムを削除しますか？',
        'error_renaming_file' => 'アイテムの名前変更に失敗しました',
        'new_folder_title' => '新しいフォルダー',
        'folder_name' => 'フォルダ名',
        'error_creating_folder' => 'フォルダの作成エラー',
        'folder_or_file_exist' => '指定された名前のフォルダまたはファイルはすでに存在しています',
        'move_empty' => '移動するアイテムを選択してください。',
        'move_popup_title' => 'ファイルまたはフォルダの移動',
         'move_popup_title' => 'ファイルまたはフォルダの移動',
        'move_destination' => '移動先フォルダ',
        'please_select_move_dest' => '保存先フォルダを選択してください',
        'move_dest_src_match' => '他の保存先フォルダを選択してください',
        'empty_library' => 'ここは少し空っぽのようです。ファイルをアップロードするか、フォルダを作成して始めましょう',
        'insert' => '挿入',
        'crop_and_insert' => 'クロップ＆インサート',
        'select_single_image' => '画像を1枚選択してください。',
        'selection_not_image' => '選択された項目は画像ではありません',
        'restore' => 'すべての変更を元に戻す',
        'resize' => 'リサイズ...',
        'selection_mode_normal' => '通常',
        'selection_mode_fixed_ratio' => '固定比',
        'selection_mode_fixed_size' => 'サイズ固定',
        'height' => '高さ',
        'width' => '幅',
        'selection_mode' => '選択モード',
        'resize_image' => '画像のリサイズ',
        'image_size' => '画像サイズ:',
        'selected_size' => '選択されたサイズ:',
        'rename_popup_title' => '名前変更',
        'rename_new_name' => '新しい名前',
        'move_please_select' => '選択してください',
        'move_button' => '移動',
    ]
];
