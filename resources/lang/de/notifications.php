<?php 
return [
  'password_updated' => [
    'subject' => 'Ihr :marketplace Passwort wurde erfolgreich aktualisiert!',
    'greeting' => 'Hallo :user!',
    'message' => 'Ihr Konto-Login-Passwort wurde erfolgreich geändert! Wenn Sie diese Änderung nicht vorgenommen haben, kontaktieren Sie uns bitte so schnell wie möglich! Klicken Sie auf die Schaltfläche unten, um sich auf Ihrer Profilseite anzumelden.',
    'button_text' => 'Besuchen Sie Ihr Profil',
  ],
  'invoice_created' => [
    'subject' => ':marketplace Rechnung mit monatlicher Abonnementgebühr',
    'greeting' => 'Hallo :merchant!',
    'message' => 'Vielen Dank für Ihre weitere Unterstützung. Wir haben eine Kopie Ihrer Rechnung für Ihre Unterlagen beigefügt. Bitte lassen Sie uns wissen, wenn Sie Fragen oder Bedenken haben!',
    'button_text' => 'Gehen Sie zum Dashboard',
  ],
  'customer_registered' => [
    'subject' => 'Willkommen auf dem :marketplace-Marktplatz!',
    'greeting' => 'Glückwunsch :customer!',
    'message' => 'Ihr Konto wurde erfolgreich erstellt! Klicken Sie auf die Schaltfläche unten, um Ihre E-Mail-Adresse zu bestätigen.',
    'button_text' => 'Überprüfe mich',
  ],
  'customer_updated' => [
    'subject' => 'Kontoinformationen erfolgreich aktualisiert!',
    'greeting' => 'Hallo :customer!',
    'message' => 'Dies ist eine Benachrichtigung, um Sie darüber zu informieren, dass Ihr Konto erfolgreich aktualisiert wurde!',
    'button_text' => 'Besuchen Sie Ihr Profil',
  ],
  'customer_password_reset' => [
    'subject' => 'Passwortbenachrichtigung zurücksetzen',
    'greeting' => 'Hallo!',
    'message' => 'Sie erhalten diese E-Mail, weil wir eine Anfrage zum Zurücksetzen des Passworts für Ihr Konto erhalten haben. Wenn Sie kein Zurücksetzen des Passworts angefordert haben, ignorieren Sie diese Benachrichtigung einfach und es ist kein weiterer button_text erforderlich.',
    'button_text' => 'Passwort zurücksetzen',
  ],
  'dispute_acknowledgement' => [
    'subject' => '[Bestellnummer: :order_id] Streit wurde erfolgreich eingereicht',
    'greeting' => 'Hallo :customer',
    'message' => 'Dies ist eine Benachrichtigung, um Sie darüber zu informieren, dass wir Ihren Streit um die Bestellnummer erhalten haben: :order_id. Unser Support-Team wird sich so schnell wie möglich bei Ihnen melden.',
    'button_text' => 'Sehen Sie sich den Streit an',
  ],
  'dispute_created' => [
    'subject' => 'Neuer Streit um die Bestellnummer: :order_id',
    'greeting' => 'Hallo :merchant!',
    'message' => 'Sie haben eine neue Streitigkeit für die Bestellnummer erhalten: :order_id. Bitte überprüfen und beheben Sie das Problem mit dem Kunden.',
    'button_text' => 'Sehen Sie sich den Streit an',
  ],
  'dispute_updated' => [
    'subject' => '[Bestellnummer: :order_id] Der Streitstatus wurde aktualisiert!',
    'greeting' => 'Hallo :customer!',
    'message' => 'Ein Streit um die Bestellnummer :order_id wurde mit dieser Nachricht des Anbieters ": reply" aktualisiert. Bitte überprüfen Sie unten und kontaktieren Sie uns, wenn Sie Hilfe benötigen.',
    'button_text' => 'Sehen Sie sich den Streit an',
  ],
  'dispute_appealed' => [
    'subject' => '[Bestellnummer: :order_id] Streit angefochten!',
    'greeting' => 'Hallo!',
    'message' => 'Gegen einen Streit um die Bestellnummer :order_id wurde mit der Meldung ": reply" Berufung eingelegt. Bitte überprüfen Sie unten für Details.',
    'button_text' => 'Sehen Sie sich den Streit an',
  ],
  'appealed_dispute_replied' => [
    'subject' => '[Bestellnummer: :order_id] Neue Antwort für Berufungsstreitigkeiten!',
    'greeting' => 'Hallo!',
    'message' => 'Ein Streit um die Bestellnummer :order_id wurde mit folgender Meldung beantwortet: </br> </br> ": reply"',
    'button_text' => 'Sehen Sie sich den Streit an',
  ],
  'low_inventory_notification' => [
    'subject' => 'Alarm bei niedrigem Lagerbestand!',
    'greeting' => 'Hallo!',
    'message' => 'Einer oder mehrere Ihrer Inventargegenstände werden niedrig. Es ist Zeit, mehr Inventar hinzuzufügen, um den Artikel auf dem Markt zu halten.',
    'button_text' => 'Inventar aktualisieren',
  ],
  'inventory_bulk_upload_procceed_notice' => [
    'subject' => 'Ihre Importanforderung für Massenbestände wurde bearbeitet.',
    'greeting' => 'Hallo!',
    'message' => 'Wir freuen uns, Ihnen mitteilen zu können, dass Ihre Anfrage zum Import von Massenbeständen bearbeitet wurde. Gesamtzahl der erfolgreich in die Plattform :success importierten Zeilen, Anzahl fehlgeschlagener Zeilen :failed',
    'failed' => 'Hier finden Sie die angehängte Datei für fehlgeschlagene Zeilen.',
    'button_text' => 'Inventar anzeigen',
  ],
  'new_message' => [
    'subject' => ':subject',
    'greeting' => 'Hallo :receiver',
    'message' => ':message',
    'button_text' => 'Zeigen Sie die Nachricht vor Ort an',
  ],
  'message_replied' => [
    'subject' => ':user antwortete :subject',
    'greeting' => 'Hallo :receiver',
    'message' => ':reply',
    'button_text' => 'Zeigen Sie die Nachricht vor Ort an',
  ],
  'order_created' => [
    'subject' => '[Bestellnummer: :order] Ihre Bestellung wurde erfolgreich aufgegeben!',
    'greeting' => 'Hallo :customer',
    'message' => 'Danke, daß Sie uns gewählt haben! Ihre Bestellung [Bestellnummer :order] wurde erfolgreich aufgegeben. Wir werden Sie über den Status der Bestellung informieren.',
    'button_text' => 'Besuchen Sie den Shop',
  ],
  'merchant_order_created_notification' => [
    'subject' => 'Neue Bestellung [Bestellnummer: :order] wurde in Ihrem Shop aufgegeben!',
    'greeting' => 'Hallo :merchant',
    'message' => 'Eine neue Bestellung [Bestellnummer :order] wurde aufgegeben. Bitte überprüfen Sie die Bestelldetails und führen Sie die Bestellung so schnell wie möglich aus.',
    'button_text' => 'Erfüllen Sie die Bestellung',
  ],
  'order_updated' => [
    'subject' => '[Bestellnummer: :order] Ihr Bestellstatus wurde aktualisiert!',
    'greeting' => 'Hallo :customer',
    'message' => 'Dies ist eine Benachrichtigung, die Sie darüber informiert, dass Ihre Bestellung [Bestellnummer :order] aktualisiert wurde. Einzelheiten zur Bestellung finden Sie weiter unten. Sie können Ihre Bestellungen auch über Ihr Dashboard überprüfen.',
    'button_text' => 'Besuchen Sie den Shop',
  ],
  'order_fulfilled' => [
    'subject' => '[Bestellnummer: :order] Ihre Bestellung ist unterwegs!',
    'greeting' => 'Hallo :customer',
    'message' => 'Dies ist eine Benachrichtigung, die Sie darüber informiert, dass Ihre Bestellung [Bestellnummer :order] wurde versendet und ist unterwegs. Einzelheiten zur Bestellung finden Sie weiter unten. Sie können Ihre Bestellungen auch über Ihr Dashboard überprüfen.',
    'button_text' => 'Besuchen Sie den Shop',
  ],
  'order_paid' => [
    'subject' => '[Bestellnummer: :order] Ihre Bestellung wurde erfolgreich bezahlt!',
    'greeting' => 'Hallo :customer',
    'message' => 'Dies ist eine Benachrichtigung, die Sie darüber informiert, dass Ihre Bestellung [Bestellnummer :order] erfolgreich bezahlt wurde und auf dem Weg ist. Einzelheiten zur Bestellung finden Sie weiter unten. Sie können Ihre Bestellungen auch über Ihr Dashboard überprüfen.',
    'button_text' => 'Besuchen Sie den Shop',
  ],
  'order_payment_failed' => [
    'subject' => '[Bestellnummer: :order] Zahlung fehlgeschlagen!',
    'greeting' => 'Hallo :customer',
    'message' => 'Dies ist eine Benachrichtigung, die Sie darüber informiert, dass Ihre Bestellung [Zahlung der Bestellnummer :order] fehlgeschlagen ist. Einzelheiten zur Bestellung finden Sie weiter unten. Sie können Ihre Bestellungen auch über Ihr Dashboard überprüfen.',
    'button_text' => 'Besuchen Sie den Shop',
  ],
  'cancellation_request_acknowledgement' => [
    'subject' => '[Bestellnummer: :order] Ihre Stornierungsanfrage wurde erfolgreich gestellt!',
    'greeting' => 'Hallo :customer',
    'message' => 'Danke, daß Sie uns gewählt haben! Ihre Bestellung [Bestellnummer :order] Stornierungsanfrage wurde erfolgreich gestellt. Wir werden Sie über den Status der Bestellung informieren.',
    'button_text' => 'Besuchen Sie den Shop',
  ],
  'merchant_order_cancellation_notification' => [
    'subject' => 'In Ihrem Shop wurde eine neue Bestellstornierungsanfrage erstellt [Bestell-ID: :order].',
    'greeting' => 'Hallo :merchant',
    'message' => 'Eine Bestellung [Bestellnummer :order] Stornierungsanfrage wurde erstellt. Bitte überprüfen Sie die Bestelldetails und beantworten Sie die Anfrage so schnell wie möglich.',
    'button_text' => 'Beantworten Sie die Anfrage',
  ],
  'cancellation_request_approved' => [
    'subject' => 'Ihre Stornierungsanfrage für [Bestellnummer: :order] Artikel wurde genehmigt!',
    'greeting' => 'Hallo :customer',
    'message' => 'Ihre Stornierungsanfrage [Bestellnummer :order] Artikel] wurde vom Anbieter genehmigt. Danke, daß Sie uns gewählt haben!',
    'button_text' => 'Besuchen Sie den Shop',
  ],
  'cancellation_request_declined' => [
    'subject' => 'Zu spät, um Ihre [Bestellnummer: :order]',
    'greeting' => 'Hallo :customer',
    'message' => 'Es tut uns wirklich leid! Es ist zu spät, um Ihre Stornierungsanfrage [Bestellnummer :order] Artikel vom Anbieter] anzunehmen. Wenn Sie die Artikel nicht haben möchten, können Sie sie trotzdem zurückgeben.',
    'button_text' => 'Besuchen Sie den Shop',
  ],
  'order_canceled' => [
    'subject' => '[Bestellnummer: :order] Ihre Bestellung wurde storniert!',
    'greeting' => 'Hallo :customer',
    'message' => 'Ihre Bestellung [Bestellnummer :order] wurde storniert. Danke, daß Sie uns gewählt haben!',
    'button_text' => 'Besuchen Sie den Shop',
  ],
  'refund_initiated' => [
    'subject' => '[Bestellnummer: :order] eine Rückerstattung wurde eingeleitet!',
    'greeting' => 'Hallo :customer',
    'message' => 'Dies ist eine Benachrichtigung, um Sie darüber zu informieren, dass wir eine Rückerstattungsanforderung für Ihre Bestellung :order eingeleitet haben. Einer unserer Teammitglieder wird die Anfrage in Kürze prüfen. Wir werden Sie über den Status der Anfrage informieren.',
  ],
  'refund_approved' => [
    'subject' => '[Bestellnummer: :order] Ein Rückerstattungsantrag wurde genehmigt!',
    'greeting' => 'Hallo :customer',
    'message' => 'Dies ist eine Benachrichtigung, um Sie darüber zu informieren, dass wir einen Rückerstattungsantrag für Ihre Bestellung :order genehmigt haben. Der erstattete Betrag beträgt :amount. Wir haben das Geld an Ihre Zahlungsmethode gesendet. Es kann einige Tage dauern, bis Ihr Konto aktiviert ist. Wenden Sie sich an Ihren Zahlungsanbieter, wenn Sie das Geld in wenigen Tagen nicht sehen.',
  ],
  'refund_declined' => [
    'subject' => '[Bestellnummer: :order] Ein Rückerstattungsantrag wurde abgelehnt!',
    'greeting' => 'Hallo :customer',
    'message' => 'Dies ist eine Benachrichtigung, die Sie darüber informiert, dass eine Rückerstattungsanforderung für Ihre Bestellung abgelehnt wurde :order. Wenn Sie mit der Lösung des Händlers nicht zufrieden sind, können Sie sich direkt von der Plattform aus an den Händler wenden oder sogar gegen den Streit auf :marketplace Berufung einlegen. Wir werden eingreifen, um das Problem zu lösen.',
  ],
  'shop_created' => [
    'subject' => 'Ihr Shop ist bereit zu gehen!',
    'greeting' => 'Glückwunsch :merchant!',
    'message' => 'Ihr Shop :shop_name wurde erfolgreich erstellt! Klicken Sie auf die Schaltfläche unten, um sich im Shop-Administrationsbereich anzumelden.',
    'button_text' => 'Gehen Sie zum Dashboard',
  ],
  'shop_updated' => [
    'subject' => 'Shop-Informationen erfolgreich aktualisiert!',
    'greeting' => 'Hallo :merchant!',
    'message' => 'Dies ist eine Benachrichtigung, um Sie darüber zu informieren, dass Ihr Shop :shop_name erfolgreich aktualisiert wurde!',
    'button_text' => 'Gehen Sie zum Dashboard',
  ],
  'shop_config_updated' => [
    'subject' => 'Shop-Konfiguration erfolgreich aktualisiert!',
    'greeting' => 'Hallo :merchant!',
    'message' => 'Ihre Shop-Konfiguration wurde erfolgreich aktualisiert! Klicken Sie auf die Schaltfläche unten, um sich im Shop-Administrationsbereich anzumelden.',
    'button_text' => 'Gehen Sie zum Dashboard',
  ],
  'shop_down_for_maintainace' => [
    'subject' => 'Ihr Shop ist geschlossen!',
    'greeting' => 'Hallo :merchant!',
    'message' => 'Dies ist eine Benachrichtigung, um Sie darüber zu informieren, dass Ihr Shop :shop_name nicht verfügbar ist! Kein Kunde kann Ihren Shop besuchen, bis er wieder in Betrieb ist.',
    'button_text' => 'Gehen Sie zur Seite Config',
  ],
  'shop_is_live' => [
    'subject' => 'Ihr Shop ist wieder bei LIVE!',
    'greeting' => 'Hallo :merchant',
    'message' => 'Dies ist eine Benachrichtigung, die Sie darüber informiert, dass Ihr Shop :shop_name wieder erfolgreich ist!',
    'button_text' => 'Gehen Sie zum Dashboard',
  ],
  'shop_deleted' => [
    'subject' => 'Dein Shop wurde von :marketplace entfernt!',
    'greeting' => 'Hallo Händler!',
    'message' => 'Dies ist eine Benachrichtigung, um Sie darüber zu informieren, dass Ihr Shop von unserem Markierungsplatz gelöscht wurde! Wir werden dich vermissen.',
  ],
  'system_is_down' => [
    'subject' => 'Ihr Marktplatz :marketplace ist jetzt ausgefallen!',
    'greeting' => 'Hallo :user!',
    'message' => 'Dies ist eine Benachrichtigung, um Sie darüber zu informieren, dass Ihr Marktplatz :marketplace nicht verfügbar ist! Kein Kunde kann Ihren Marktplatz besuchen, bis er wieder lebt.',
    'button_text' => 'Gehen Sie zur Konfigurationsseite',
  ],
  'system_is_live' => [
    'subject' => 'Ihr Marktplatz :marketplace ist zurück zu LIVE!',
    'greeting' => 'Hallo :user!',
    'message' => 'Dies ist eine Benachrichtigung, die Sie darüber informiert, dass Ihr Marktplatz :marketplace wieder erfolgreich ist!',
    'button_text' => 'Gehen Sie zum Dashboard',
  ],
  'system_info_updated' => [
    'subject' => ':marketplace - Marktplatzinformationen erfolgreich aktualisiert!',
    'greeting' => 'Hallo :user!',
    'message' => 'Dies ist eine Benachrichtigung, um Sie darüber zu informieren, dass Ihr Marktplatz :marketplace erfolgreich aktualisiert wurde!',
    'button_text' => 'Gehen Sie zum Dashboard',
  ],
  'system_config_updated' => [
    'subject' => ':marketplace - Marktplatzkonfiguration erfolgreich aktualisiert!',
    'greeting' => 'Hallo :user!',
    'message' => 'Die Konfiguration Ihres Marktplatzes :marketplace wurde erfolgreich aktualisiert! Klicken Sie auf die Schaltfläche unten, um sich im Admin-Bereich anzumelden.',
    'button_text' => 'Einstellungen anzeigen',
  ],
  'new_contact_us_message' => [
    'subject' => 'Neue Nachricht über Kontaktformular: :subject',
    'greeting' => 'Hallo!',
    'message_footer_with_phone' => 'Sie können diese E-Mail beantworten oder sich direkt an dieses Telefon wenden :phone',
    'message_footer' => 'Sie können diese E-Mail direkt beantworten.',
  ],
  'ticket_acknowledgement' => [
    'subject' => '[Ticket ID: :ticket_id] :subject',
    'greeting' => 'Hallo :user',
    'message' => 'Dies ist eine Benachrichtigung, um Sie darüber zu informieren, dass wir Ihr Ticket :ticket_id erfolgreich erhalten haben! Unser Support-Team wird sich so schnell wie möglich bei Ihnen melden.',
    'button_text' => 'Ticket ansehen',
  ],
  'ticket_created' => [
    'subject' => 'Neues Support-Ticket [Ticket-ID: :ticket_id] :subject',
    'greeting' => 'Hallo!',
    'message' => 'Sie haben vom Anbieter :vendor eine neue Support-Ticket-ID :ticket_id, Absender :sender, erhalten. Überprüfen und bewerten Sie das Ticket für das Support-Team.',
    'button_text' => 'Ticket ansehen',
  ],
  'ticket_assigned' => [
    'subject' => 'Ein Ticket, das Ihnen gerade zugewiesen wurde [Ticket IF: :ticket_id] :subject',
    'greeting' => 'Hallo :user',
    'message' => 'Dies ist eine Benachrichtigung, die Sie über das Ticket informiert [Ticket-ID: :ticket_id] :subject, die Ihnen gerade zugewiesen wurde. Überprüfen und beantworten Sie das Ticket so schnell wie möglich.',
    'button_text' => 'Antworte auf das Ticket',
  ],
  'ticket_replied' => [
    'subject' => ':user antwortete auf das Ticket [Ticket ID: :ticket_id] :subject',
    'greeting' => 'Hallo :user',
    'message' => ':reply',
    'button_text' => 'Ticket ansehen',
  ],
  'ticket_updated' => [
    'subject' => 'Ein Ticket [Ticket ID: :ticket_id] :subject wurde aktualisiert!',
    'greeting' => 'Hallo :user!',
    'message' => 'Eine Ihrer Support-Tickets Ticket-ID #: ticket_id :subject wurde aktualisiert. Bitte kontaktieren Sie uns, wenn Sie Hilfe benötigen.',
    'button_text' => 'Ticket ansehen',
  ],
  'user_created' => [
    'subject' => ':admin hat dich zum :marketplace Marktplatz hinzugefügt!',
    'greeting' => 'Glückwunsch :user!',
    'message' => 'Du wurdest von :admin zu :marketplace hinzugefügt! Klicken Sie auf die Schaltfläche unten, um sich in Ihrem Konto anzumelden. Verwenden Sie das temporäre Passwort für die Erstanmeldung.',
    'alert' => 'Vergessen Sie nicht, Ihr Passwort nach dem Login zu ändern.',
    'button_text' => 'Besuchen Sie Ihr Profil',
  ],
  'user_updated' => [
    'subject' => 'Kontoinformationen erfolgreich aktualisiert!',
    'greeting' => 'Hallo :user!',
    'message' => 'Dies ist eine Benachrichtigung, um Sie darüber zu informieren, dass Ihr Konto erfolgreich aktualisiert wurde!',
    'button_text' => 'Besuchen Sie Ihr Profil',
  ],
  'verdor_registered' => [
    'subject' => 'Neuer Anbieter gerade registriert!',
    'greeting' => 'Glückwunsch!',
    'message' => 'Ihr Marktplatz :marketplace hat gerade einen neuen Verdor mit dem Shopnamen <strong>: Shopname </strong> und der E-Mail-Adresse des Händlers lautet :merchant_email',
    'button_text' => 'Gehen Sie zum Dashboard',
  ],
  'email_verification' => [
    'subject' => 'Überprüfen Sie Ihr :marketplace-Konto!',
    'greeting' => 'Glückwunsch :user!',
    'message' => 'Ihr Konto wurde erfolgreich erstellt! Klicken Sie auf die Schaltfläche unten, um Ihre E-Mail-Adresse zu bestätigen.',
    'button_text' => 'Überprüfen Sie meine E-Mail',
  ],
  'dispute_solved' => [
    'subject' => 'Streit [Bestellnummer: :order_id] wurde als gelöst markiert!',
    'greeting' => 'Hallo :customer!',
    'message' => 'Der Streit um die Bestellnummer: :order_id wurde als gelöst markiert. Danke, dass Sie bei uns sind.',
    'button_text' => 'Sehen Sie sich den Streit an',
  ],
  'new_chat_message' => [
    'subject' => 'Neue Nachricht über das Live-Chat-Formular :sender',
    'greeting' => 'Hallo :receipent!',
    'message' => 'Sie haben eine neue Nachricht über das Live-Chat-Fenster ": message" erhalten. Bitte melden Sie sich im Shop-Dashboard an, um zu antworten.',
    'button_text' => 'Ansicht auf dem Dashboard',
  ],
];