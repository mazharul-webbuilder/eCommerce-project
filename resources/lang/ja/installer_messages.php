<?php 
return [
  'title' => 'zCartインストーラー',
  'next' => '次の一歩',
  'back' => '前',
  'finish' => 'インストール',
  'forms' => [
    'errorTitle' => '次のエラーが発生しました。',
  ],
  'wait' => 'インストールには数分かかる場合がありますので、しばらくお待ちください。',
  'welcome' => [
    'templateTitle' => 'ようこそ',
    'title' => 'zCartインストーラー',
    'message' => '簡単なインストールとセットアップウィザード。',
    'next' => '要件を確認する',
  ],
  'requirements' => [
    'templateTitle' => 'ステップ1 |サーバー要件',
    'title' => 'サーバー要件',
    'next' => '権限を確認する',
    'required' => '続行するには、すべてのサーバー要件を設定する必要があります',
  ],
  'permissions' => [
    'templateTitle' => 'ステップ2 |権限',
    'title' => '権限',
    'next' => '環境の構成',
    'required' => '続行するには、必要に応じて権限を設定してください。ドキュメントを読んでください。助けを求めて。',
  ],
  'environment' => [
    'menu' => [
      'templateTitle' => 'ステップ3 |環境設定',
      'title' => '環境設定',
      'desc' => 'アプリの<code> .env </code>ファイルの構成方法を選択してください。',
      'wizard-button' => 'フォームウィザードのセットアップ',
      'classic-button' => 'クラシックテキストエディタ',
    ],
    'wizard' => [
      'templateTitle' => 'ステップ3 |環境設定|ガイド付きウィザード',
      'title' => 'ガイド付き<code> .env </code>ウィザード',
      'tabs' => [
        'environment' => '環境',
        'database' => 'データベース',
        'application' => '応用',
      ],
      'form' => [
        'name_required' => '環境名が必要です。',
        'app_name_label' => 'アプリ名',
        'app_name_placeholder' => 'アプリ名',
        'app_environment_label' => 'アプリ環境',
        'app_environment_label_local' => '地元',
        'app_environment_label_developement' => '開発',
        'app_environment_label_qa' => 'Qa',
        'app_environment_label_production' => '製造',
        'app_environment_label_other' => 'その他',
        'app_environment_placeholder_other' => '環境に入る...',
        'app_debug_label' => 'アプリのデバッグ',
        'app_debug_label_true' => '本当',
        'app_debug_label_false' => '誤り',
        'app_log_level_label' => 'アプリログレベル',
        'app_log_level_label_debug' => 'デバッグ',
        'app_log_level_label_info' => '情報',
        'app_log_level_label_notice' => '通知',
        'app_log_level_label_warning' => '警告',
        'app_log_level_label_error' => 'エラー',
        'app_log_level_label_critical' => 'クリティカル',
        'app_log_level_label_alert' => 'アラート',
        'app_log_level_label_emergency' => '緊急',
        'app_url_label' => 'アプリのURL',
        'app_url_placeholder' => 'アプリのURL',
        'db_connection_failed' => 'データベースに接続できませんでした。構成を確認してください。',
        'db_connection_label' => 'データベース接続',
        'db_connection_label_mysql' => 'mysql',
        'db_connection_label_sqlite' => 'sqlite',
        'db_connection_label_pgsql' => 'pgsql',
        'db_connection_label_sqlsrv' => 'sqlsrv',
        'db_host_label' => 'データベースホスト',
        'db_host_placeholder' => 'データベースホスト',
        'db_port_label' => 'データベースポート',
        'db_port_placeholder' => 'データベースポート',
        'db_name_label' => 'データベース名',
        'db_name_placeholder' => 'データベース名',
        'db_username_label' => 'データベースユーザー名',
        'db_username_placeholder' => 'データベースユーザー名',
        'db_password_label' => 'データベースパスワード',
        'db_password_placeholder' => 'データベースパスワード',
        'app_tabs' => [
          'more_info' => 'より詳しい情報',
          'broadcasting_title' => 'ブロードキャスト、キャッシング、セッション、およびキュー',
          'broadcasting_label' => 'ブロードキャストドライバー',
          'broadcasting_placeholder' => 'ブロードキャストドライバー',
          'cache_label' => 'キャッシュドライバー',
          'cache_placeholder' => 'キャッシュドライバー',
          'session_label' => 'セッションドライバー',
          'session_placeholder' => 'セッションドライバー',
          'queue_label' => 'キュードライバー',
          'queue_placeholder' => 'キュードライバー',
          'redis_label' => 'Redisドライバー',
          'redis_host' => 'Redisホスト',
          'redis_password' => 'Redisパスワード',
          'redis_port' => 'Redisポート',
          'mail_label' => '郵便物',
          'mail_driver_label' => 'メールドライバー',
          'mail_driver_placeholder' => 'メールドライバー',
          'mail_host_label' => 'メールホスト',
          'mail_host_placeholder' => 'メールホスト',
          'mail_port_label' => 'メールポート',
          'mail_port_placeholder' => 'メールポート',
          'mail_username_label' => 'メールユーザー名',
          'mail_username_placeholder' => 'メールユーザー名',
          'mail_password_label' => 'メールパスワード',
          'mail_password_placeholder' => 'メールパスワード',
          'mail_encryption_label' => 'メールの暗号化',
          'mail_encryption_placeholder' => 'メールの暗号化',
          'pusher_label' => 'プッシャー',
          'pusher_app_id_label' => 'プッシャーアプリID',
          'pusher_app_id_palceholder' => 'プッシャーアプリID',
          'pusher_app_key_label' => 'プッシャーアプリキー',
          'pusher_app_key_palceholder' => 'プッシャーアプリキー',
          'pusher_app_secret_label' => 'プッシャーアプリシークレット',
          'pusher_app_secret_palceholder' => 'プッシャーアプリシークレット',
        ],
        'buttons' => [
          'setup_database' => 'セットアップデータベース',
          'setup_application' => 'セットアップアプリケーション',
          'install' => 'インストール',
        ],
      ],
    ],
    'classic' => [
      'backup' => '混乱を避けるために、変更を加える前に、デフォルト設定をコピーして別の場所に保存してください。',
      'templateTitle' => 'ステップ3 |環境設定|クラシックエディタ',
      'title' => '環境ファイルエディタ',
      'save' => '構成を保存する',
      'back' => 'フォームウィザードを使用する',
      'install' => 'インストール',
      'required' => '問題を修正して続行します。',
    ],
    'success' => '.envファイルの設定が保存されました。',
    'errors' => '.envファイルを保存できません。手動で作成してください。',
  ],
  'verify' => [
    'verify_purchase' => '購入の確認',
    'submit' => '参加する',
    'form' => [
      'email_address_label' => '電子メールアドレス',
      'email_address_placeholder' => '電子メールアドレス',
      'purchase_code_label' => '購入コード',
      'purchase_code_placeholder' => '購入コードまたはライセンスキー',
      'root_url_label' => 'ルートURL',
      'root_url_placeholder' => 'ルートURL（末尾に/なし）',
    ],
  ],
  'install' => 'インストール',
  'verified' => 'ライセンスは正常に検証されました。',
  'verification_failed' => 'ライセンスの検証に失敗しました！',
  'installed' => [
    'success_log_message' => 'zCartインストーラーが正常にインストールされました',
  ],
  'final' => [
    'title' => '最終段階',
    'templateTitle' => '最終段階',
    'finished' => 'アプリケーションが正常にインストールされました。',
    'migration' => '移行とシードコンソールの出力：',
    'console' => 'アプリケーションコンソールの出力：',
    'log' => 'インストールログエントリ：',
    'env' => '最終的な.envファイル：',
    'exit' => 'ここをクリックしてログイン',
    'import_demo_data' => 'デモデータのインポート',
  ],
  'updater' => [
    'title' => 'zCartアップデータ',
    'welcome' => [
      'title' => 'アップデータへようこそ',
      'message' => '更新ウィザードへようこそ。',
    ],
    'overview' => [
      'title' => '概要概要',
      'message' => '1つの更新があります。| :numberの更新があります。',
      'install_updates' => 'アップデートをインストールする',
    ],
    'final' => [
      'title' => '終了しました',
      'finished' => 'アプリケーションのデータベースが正常に更新されました。',
      'exit' => '終了するには、ここをクリックしてください',
    ],
    'log' => [
      'success_message' => 'zCartインストーラーが正常に更新されました',
    ],
  ],
];