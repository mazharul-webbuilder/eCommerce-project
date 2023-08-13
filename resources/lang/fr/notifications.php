<?php 
return [
  'password_updated' => [
    'subject' => 'Votre mot de passe :marketplace a été mis à jour avec succès!',
    'greeting' => 'Bonjour :user!',
    'message' => 'Le mot de passe de connexion de votre compte a été modifié avec succès! Si vous n\'avez pas effectué ce changement, veuillez nous contacter dès que possible! Cliquez sur le bouton ci-dessous pour vous connecter à votre page de profil.',
    'button_text' => 'Visitez votre profil',
  ],
  'invoice_created' => [
    'subject' => ':marketplace facture d\'abonnement mensuel',
    'greeting' => 'Bonjour :merchant!',
    'message' => 'Merci pour votre soutien continu. Nous avons joint une copie de votre facture pour vos dossiers. S\'il vous plaît laissez-nous savoir si vous avez des questions ou des préoccupations!',
    'button_text' => 'Aller au tableau de bord',
  ],
  'customer_registered' => [
    'subject' => 'Bienvenue sur le marché :marketplace!',
    'greeting' => 'Félicitations :customer!',
    'message' => 'Votre compte a été créé avec succès! Cliquez sur le bouton ci-dessous pour vérifier votre adresse e-mail.',
    'button_text' => 'Vérifiez moi',
  ],
  'customer_updated' => [
    'subject' => 'Les informations du compte ont été mises à jour avec succès!',
    'greeting' => 'Bonjour :customer!',
    'message' => 'Ceci est une notification pour vous informer que votre compte a été mis à jour avec succès!',
    'button_text' => 'Visitez votre profil',
  ],
  'customer_password_reset' => [
    'subject' => 'Notification de réinitialisation du mot de passe',
    'greeting' => 'salut!',
    'message' => 'Vous recevez cet e-mail car nous avons reçu une demande de réinitialisation de mot de passe pour votre compte. Si vous n\'avez pas demandé de réinitialisation de mot de passe, ignorez simplement cette notification et aucun autre bouton_texte n\'est requis.',
    'button_text' => 'réinitialiser le mot de passe',
  ],
  'dispute_acknowledgement' => [
    'subject' => '[Order ID: :order_id] contestation a été soumise avec succès',
    'greeting' => 'Bonjour :customer',
    'message' => 'Ceci est une notification pour vous informer que nous avons reçu votre contestation pour le numéro de commande: :order_id, notre équipe d\'assistance vous répondra dans les plus brefs délais',
    'button_text' => 'Afficher le litige',
  ],
  'dispute_created' => [
    'subject' => 'Nouveau litige pour l\'ID de commande: :order_id',
    'greeting' => 'Bonjour :merchant!',
    'message' => 'Vous avez reçu un nouveau litige pour le numéro de commande: :order_id. Veuillez examiner et résoudre le problème avec le client.',
    'button_text' => 'Afficher le litige',
  ],
  'dispute_updated' => [
    'subject' => '[Order ID: :order_id] Le statut du litige a été mis à jour!',
    'greeting' => 'Bonjour :customer!',
    'message' => 'Un litige pour l\'ID de commande :order_id a été mis à jour avec ce message du fournisseur ": réponse". Veuillez vérifier ci-dessous et nous contacter si vous avez besoin d\'aide.',
    'button_text' => 'Afficher le litige',
  ],
  'dispute_appealed' => [
    'subject' => '[Numéro de commande: :order_id] Contestation portée en appel!',
    'greeting' => 'salut!',
    'message' => 'Un litige concernant l\'ID de commande :order_id a fait l\'objet d\'un appel avec ce message ": réponse". Veuillez vérifier ci-dessous pour plus de détails.',
    'button_text' => 'Afficher le litige',
  ],
  'appealed_dispute_replied' => [
    'subject' => '[Order ID: :order_id] Nouvelle réponse pour contestation d\'appel!',
    'greeting' => 'salut!',
    'message' => 'Un litige concernant l\'ID de commande :order_id a été répondu avec ce message: </br> </br> ": reply"',
    'button_text' => 'Afficher le litige',
  ],
  'low_inventory_notification' => [
    'subject' => 'Alerte d\'inventaire bas!',
    'greeting' => 'salut!',
    'message' => 'Un ou plusieurs articles de votre inventaire deviennent bas. Il est temps d\'ajouter plus d\'inventaire pour maintenir l\'article en ligne sur le marché.',
    'button_text' => 'Mettre à jour l\'inventaire',
  ],
  'inventory_bulk_upload_procceed_notice' => [
    'subject' => 'Votre demande d\'importation d\'inventaire en bloc a été traitée.',
    'greeting' => 'salut!',
    'message' => 'Nous sommes heureux de vous informer que votre demande d\'importation d\'inventaire en vrac a été traitée. Nombre total de lignes importées avec succès dans la plate-forme :success, nombre de lignes échoué :failed',
    'failed' => 'Veuillez trouver le fichier joint pour les lignes ayant échoué.',
    'button_text' => 'Voir l\'inventaire',
  ],
  'new_message' => [
    'subject' => ':subject',
    'greeting' => 'Bonjour :receiver',
    'message' => ':message',
    'button_text' => 'Voir le message sur place',
  ],
  'message_replied' => [
    'subject' => ':user a répondu :subject',
    'greeting' => 'Bonjour :receiver',
    'message' => ':reply',
    'button_text' => 'Voir le message sur place',
  ],
  'order_created' => [
    'subject' => '[Numéro de commande: :order] votre commande a été passée avec succès!',
    'greeting' => 'Bonjour :customer',
    'message' => 'Merci de nous avoir choisi! Votre commande [Order ID :order] a été placée avec succès. Nous vous informerons de l\'état de la commande.',
    'button_text' => 'Visitez la boutique',
  ],
  'merchant_order_created_notification' => [
    'subject' => 'Nouvelle commande [Order ID: :order] a été placé sur votre boutique!',
    'greeting' => 'Bonjour :merchant',
    'message' => 'Une nouvelle commande [Order ID :order] a été passée. Veuillez vérifier les détails de la commande et exécuter la commande dès que possible.',
    'button_text' => 'Exécuter la commande',
  ],
  'order_updated' => [
    'subject' => '[Order ID: :order] l\'état de votre commande a été mis à jour!',
    'greeting' => 'Bonjour :customer',
    'message' => 'Ceci est une notification pour vous informer que votre commande [Order ID :order] a été mis à jour. Veuillez voir ci-dessous pour les détails de la commande. Vous pouvez également vérifier vos commandes depuis votre tableau de bord.',
    'button_text' => 'Visitez la boutique',
  ],
  'order_fulfilled' => [
    'subject' => '[Order ID: :order] Votre commande est en route!',
    'greeting' => 'Bonjour :customer',
    'message' => 'Ceci est une notification pour vous informer que votre commande [Order ID :order] a été expédiée et qu\'elle est en route. Veuillez voir ci-dessous pour les détails de la commande. Vous pouvez également vérifier vos commandes depuis votre tableau de bord.',
    'button_text' => 'Visitez la boutique',
  ],
  'order_paid' => [
    'subject' => '[Order ID: :order] Votre commande a été payée avec succès!',
    'greeting' => 'Bonjour :customer',
    'message' => 'Ceci est une notification pour vous informer que votre commande [Order ID :order] a été payée avec succès et qu\'elle est en route. Veuillez voir ci-dessous pour les détails de la commande. Vous pouvez également vérifier vos commandes depuis votre tableau de bord.',
    'button_text' => 'Visitez la boutique',
  ],
  'order_payment_failed' => [
    'subject' => '[Numéro de commande: échec du paiement :order]!',
    'greeting' => 'Bonjour :customer',
    'message' => 'Ceci est une notification pour vous informer que votre commande [Order ID :order] payment has been failed. Veuillez voir ci-dessous pour les détails de la commande. Vous pouvez également vérifier vos commandes depuis votre tableau de bord.',
    'button_text' => 'Visitez la boutique',
  ],
  'cancellation_request_acknowledgement' => [
    'subject' => '[Numéro de commande: :order] votre demande d\'annulation a été placée avec succès!',
    'greeting' => 'Bonjour :customer',
    'message' => 'Merci de nous avoir choisi! Votre commande [ID de commande :order] demande d\'annulation a été placée avec succès. Nous vous informerons de l\'état de la commande.',
    'button_text' => 'Visitez la boutique',
  ],
  'merchant_order_cancellation_notification' => [
    'subject' => 'Une nouvelle demande d\'annulation de commande a été créée sur votre boutique [Order ID: :order].',
    'greeting' => 'Bonjour :merchant',
    'message' => 'Une commande [ID de commande :order] demande d\'annulation a été créée. Veuillez vérifier les détails de la commande et répondre à la demande dès que possible.',
    'button_text' => 'Répondre à la demande',
  ],
  'cancellation_request_approved' => [
    'subject' => 'Votre demande d\'annulation de [Order ID: :order] article (s) a été approuvée!',
    'greeting' => 'Bonjour :customer',
    'message' => 'Votre demande d\'annulation de [Order ID :order] article (s) a été approuvée par le fournisseur. Merci de nous avoir choisi!',
    'button_text' => 'Visitez la boutique',
  ],
  'cancellation_request_declined' => [
    'subject' => 'Trop tard pour annuler votre [Order ID: :order]',
    'greeting' => 'Bonjour :customer',
    'message' => 'Nous sommes vraiment désolés! Il est trop tard pour accepter votre demande d\'annulation de [Order ID :order] article (s) par le fournisseur. Si vous n\'aimez pas les articles, vous pouvez toujours les retourner.',
    'button_text' => 'Visitez la boutique',
  ],
  'order_canceled' => [
    'subject' => '[Order ID: :order] votre commande a été annulée!',
    'greeting' => 'Bonjour :customer',
    'message' => 'Votre commande [Order ID :order] a été annulée. Merci de nous avoir choisi!',
    'button_text' => 'Visitez la boutique',
  ],
  'refund_initiated' => [
    'subject' => '[Numéro de commande: :order] un remboursement a été lancé!',
    'greeting' => 'Bonjour :customer',
    'message' => 'Ceci est une notification pour vous informer que nous avons lancé une demande de remboursement pour votre commande :order. Un membre de notre équipe examinera bientôt la demande. Nous vous informerons de l\'état de la demande.',
  ],
  'refund_approved' => [
    'subject' => '[Numéro de commande: :order] une demande de remboursement a été approuvée!',
    'greeting' => 'Bonjour :customer',
    'message' => 'Ceci est une notification pour vous informer que nous avons approuvé une demande de remboursement pour votre commande :order. Le montant remboursé est de :amount. Nous avons envoyé l\'argent à votre mode de paiement, cela peut prendre quelques jours pour valider votre compte. Contactez votre fournisseur de paiement si vous ne voyez pas l\'argent effectué dans quelques jours.',
  ],
  'refund_declined' => [
    'subject' => '[Order ID: :order], une demande de remboursement a été refusée!',
    'greeting' => 'Bonjour :customer',
    'message' => 'Ceci est une notification pour vous informer qu\'une demande de remboursement a été refusée pour votre commande :order. Si vous n\'êtes pas satisfait de la solution du commerçant, vous pouvez contacter le commerçant directement depuis la plateforme ou même faire appel du litige sur :marketplace. Nous allons intervenir pour résoudre le problème.',
  ],
  'shop_created' => [
    'subject' => 'Votre boutique est prête à partir!',
    'greeting' => 'Félicitations :merchant!',
    'message' => 'Votre boutique :shop_name a été créée avec succès! Cliquez sur le bouton ci-dessous pour vous connecter au panneau d\'administration de la boutique.',
    'button_text' => 'Aller au tableau de bord',
  ],
  'shop_updated' => [
    'subject' => 'Informations sur la boutique mises à jour avec succès!',
    'greeting' => 'Bonjour :merchant!',
    'message' => 'Ceci est une notification pour vous informer que votre boutique :shop_name a été mise à jour avec succès!',
    'button_text' => 'Aller au tableau de bord',
  ],
  'shop_config_updated' => [
    'subject' => 'Configuration de la boutique mise à jour avec succès!',
    'greeting' => 'Bonjour :merchant!',
    'message' => 'La configuration de votre boutique a été mise à jour avec succès! Cliquez sur le bouton ci-dessous pour vous connecter au panneau d\'administration de la boutique.',
    'button_text' => 'Aller au tableau de bord',
  ],
  'shop_down_for_maintainace' => [
    'subject' => 'Votre boutique est en panne!',
    'greeting' => 'Bonjour :merchant!',
    'message' => 'Ceci est une notification pour vous informer que votre boutique :shop_name est en panne! Aucun client ne peut visiter votre boutique tant qu\'elle n\'est pas à nouveau en vie.',
    'button_text' => 'Accédez à la page Config',
  ],
  'shop_is_live' => [
    'subject' => 'Votre boutique est de retour en LIVE!',
    'greeting' => 'Bonjour :merchant',
    'message' => 'Ceci est une notification pour vous informer que votre boutique :shop_name est de retour pour vivre avec succès!',
    'button_text' => 'Aller au tableau de bord',
  ],
  'shop_deleted' => [
    'subject' => 'Votre boutique a été supprimée de :marketplace!',
    'greeting' => 'Bonjour marchand!',
    'message' => 'Ceci est une notification pour vous informer que votre boutique a été supprimée de notre marqueur! Vous nous manquerez.',
  ],
  'system_is_down' => [
    'subject' => 'Votre marketplace :marketplace est en panne maintenant!',
    'greeting' => 'Bonjour :user!',
    'message' => 'Ceci est une notification pour vous informer que votre marketplace :marketplace est en panne! Aucun client ne peut visiter votre place de marché tant qu\'elle n\'est pas de nouveau disponible.',
    'button_text' => 'Aller à la page de configuration',
  ],
  'system_is_live' => [
    'subject' => 'Votre marketplace :marketplace est de retour en LIVE!',
    'greeting' => 'Bonjour :user!',
    'message' => 'Ceci est une notification pour vous informer que votre marketplace :marketplace est de retour avec succès!',
    'button_text' => 'Aller au tableau de bord',
  ],
  'system_info_updated' => [
    'subject' => ':marketplace - les informations du marché ont été mises à jour avec succès!',
    'greeting' => 'Bonjour :user!',
    'message' => 'Ceci est une notification pour vous informer que votre marketplace :marketplace a été mise à jour avec succès!',
    'button_text' => 'Aller au tableau de bord',
  ],
  'system_config_updated' => [
    'subject' => ':marketplace - configuration du marché mise à jour avec succès!',
    'greeting' => 'Bonjour :user!',
    'message' => 'La configuration de votre marketplace :marketplace a été mise à jour avec succès! Cliquez sur le bouton ci-dessous pour vous connecter au panneau d\'administration.',
    'button_text' => 'Paramètres d\'affichage',
  ],
  'new_contact_us_message' => [
    'subject' => 'Nouveau message via le formulaire de contact: :subject',
    'greeting' => 'salut!',
    'message_footer_with_phone' => 'Vous pouvez répondre à cet e-mail ou contacter directement sur ce téléphone :phone',
    'message_footer' => 'Vous pouvez répondre directement à cet e-mail.',
  ],
  'ticket_acknowledgement' => [
    'subject' => '[ID du ticket: :ticket_id] :subject',
    'greeting' => 'Bonjour :user',
    'message' => 'Ceci est une notification pour vous informer que nous avons bien reçu votre ticket :ticket_id! Notre équipe d\'assistance vous répondra dans les plus brefs délais.',
    'button_text' => 'Voir le ticket',
  ],
  'ticket_created' => [
    'subject' => 'Nouveau ticket d\'assistance [ID du ticket: :ticket_id] :subject',
    'greeting' => 'salut!',
    'message' => 'Vous avez reçu un nouvel ID de ticket d\'assistance :ticket_id, expéditeur :sender du fournisseur :vendor. Examinez et attribuez le ticket à l\'équipe d\'assistance.',
    'button_text' => 'Voir le ticket',
  ],
  'ticket_assigned' => [
    'subject' => 'Un ticket qui vient de vous être attribué [Ticket IF: :ticket_id] :subject',
    'greeting' => 'Bonjour :user',
    'message' => 'Ceci est une notification pour vous informer que le ticket [ID du ticket: :ticket_id] :subject vient de vous être attribué. Vérifiez le ticket et répondez-y dès que possible.',
    'button_text' => 'Répondre au ticket',
  ],
  'ticket_replied' => [
    'subject' => ':user a répondu au ticket [ID du ticket: :ticket_id] :subject',
    'greeting' => 'Bonjour :user',
    'message' => ':reply',
    'button_text' => 'Voir le ticket',
  ],
  'ticket_updated' => [
    'subject' => 'Un ticket [ID du ticket: :ticket_id] :subject a été mis à jour!',
    'greeting' => 'Bonjour :user!',
    'message' => 'Un de vos tickets de support ID #: ticket_id :subject a été mis à jour. Veuillez nous contacter si vous avez besoin d\'aide.',
    'button_text' => 'Voir le ticket',
  ],
  'user_created' => [
    'subject' => ':admin vous a ajouté au marché :marketplace!',
    'greeting' => 'Félicitations :user!',
    'message' => 'Vous avez été ajouté au :marketplace par :admin! Cliquez sur le bouton ci-dessous pour vous connecter à votre compte. Utilisez le mot de passe temporaire pour la connexion initiale.',
    'alert' => 'N\'oubliez pas de changer votre mot de passe après la connexion.',
    'button_text' => 'Visitez votre profil',
  ],
  'user_updated' => [
    'subject' => 'Les informations du compte ont été mises à jour avec succès!',
    'greeting' => 'Bonjour :user!',
    'message' => 'Ceci est une notification pour vous informer que votre compte a été mis à jour avec succès!',
    'button_text' => 'Visitez votre profil',
  ],
  'verdor_registered' => [
    'subject' => 'Nouveau fournisseur vient de s\'inscrire!',
    'greeting' => 'Félicitations!',
    'message' => 'Votre marketplace :marketplace vient de recevoir un nouveau verdor avec le nom de la boutique <strong>: shop_name </strong> et l\'adresse e-mail du marchand est :merchant_email',
    'button_text' => 'Aller au tableau de bord',
  ],
  'email_verification' => [
    'subject' => 'Vérifiez votre compte :marketplace!',
    'greeting' => 'Félicitations :user!',
    'message' => 'Votre compte a été créé avec succès! Cliquez sur le bouton ci-dessous pour vérifier votre adresse e-mail.',
    'button_text' => 'Vérifier mon email',
  ],
  'dispute_solved' => [
    'subject' => 'Contestation [Le numéro de commande: :order_id] a été marqué comme résolu!',
    'greeting' => 'Bonjour :customer!',
    'message' => 'Le litige concernant l\'ID de commande: :order_id a été marqué comme résolu. Merci d\'être avec nous.',
    'button_text' => 'Afficher le litige',
  ],
  'new_chat_message' => [
    'subject' => 'Nouveau message via le formulaire de chat en direct :sender',
    'greeting' => 'Bonjour :receipent!',
    'message' => 'Vous avez reçu un nouveau message via la fenêtre de chat en direct ": message". Veuillez vous connecter au tableau de bord de la boutique pour répondre.',
    'button_text' => 'Vue sur le tableau de bord',
  ],
];