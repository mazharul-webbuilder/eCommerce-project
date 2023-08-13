<?php
return [
  'canceled' => 'Cancelado!',
  'confirmed' => 'Confirmado',
  'created' => ':model foi criado com sucesso!',
  'imported' => 'Importado com sucesso!',
  'sent' => ':model foi enviado com sucesso!',
  'updated' => ':model foi atualizado com sucesso!',
  'trashed' => ':model foi movido para o lixo!',
  'restored' => ':model foi restaurado com sucesso!',
  'deleted' => ':model foi excluído permanentemente!',
  'card_updated' => 'Cartão de crédito atualizado com sucesso!',
  'demo_restriction' => 'Esta ação é restrita ao modo de demonstração!',
  'subscription_cancelled' => 'A assinatura foi cancelada!',
  'subscription_resumed' => 'Assinatura retomada com sucesso!',
  'subscribed' => 'Parabéns! Inscrito com sucesso !!',
  'subscription_error' => 'Erro ao criar assinatura. Entre em contato com o suporte ao cliente.',
  'cant_delete_faq_topic' => 'Não é possível excluir: exclua todas as perguntas frequentes em :topic e tente novamente!',
  'nofound' => ':model não existe! tente outra pesquisa.',
  'file_deleted' => 'O arquivo foi excluído com sucesso!',
  'updated_featured_categories' => 'Lista de categorias em destaque atualizada com sucesso!',
  'archived' => ':model foi arquivado com sucesso!',
  'fulfilled' => 'O pedido foi atendido com sucesso.',
  'fulfilled_and_archived' => 'O pedido foi atendido e arquivado com sucesso.',
  'failed' => 'A ação falhou! Algo deu errado !!',
  'input_error' => 'Houve alguns problemas com sua entrada.',
  'secret_logged_in' => 'Representado com sucesso.',
  'secret_logged_out' => 'Desconectado da conta secreta.',
  'you_are_impersonated' => 'Sua identidade foi falsificada para a conta corrente. Tenha cuidado com suas ações.',
  'profile_updated' => 'perfil atualizado',
  'password_updated' => 'A senha foi alterada!',
  'incorrect_current_password' => 'Sua senha atual não está correta. Por favor, tente novamente!',
  'file_not_exist' => 'O arquivo solicitado não existe!',
  'img_upload_failed' => 'O upload da imagem falhou!',
  'payment_method_activation_success' => 'Ativado com sucesso! Agora você pode aceitar o pagamento usando este método.',
  'payment_method_activation_failed' => 'A ativação do método de pagamento falhou! Por favor, tente novamente.',
  'payment_method_disconnect_success' => 'Desconectado com sucesso!',
  'payment_method_disconnect_failed' => 'Este aplicativo não está conectado à conta stripe ou a conta não existe.',
  'invoice_sent_to_customer' => 'A fatura foi enviada ao cliente.',
  'freezed_model' => 'Este registro é congelado pela configuração do sistema. O aplicativo precisa desse valor para funcionar corretamente.',
  'email_verification_notice' => 'Seu endereço de e-mail não foi verificado, verifique para obter acesso total.',
  'theme_activated' => 'O tema :theme foi ativado com sucesso!',
  'the_ip_banned' => 'O endereço IP foi banido do aplicativo.',
  'the_ip_unbanned' => 'O endereço IP foi removido da lista de bloqueio.',
  'no_billing_info' => 'Adicione informações de faturamento para continuar.',
  'no_card_added' => 'Adicione informações de faturamento para se inscrever.',
  'we_dont_save_card_info' => 'Não armazenamos as informações do seu cartão.',
  'plan_comes_with_trial' => 'Cada plano vem com um período de teste GRATUITO de :days dias',
  'trial_ends_at' => 'Seu teste termina em :ends dias!',
  'trial_expired' => 'Seu período de teste expirou! Escolha uma assinatura para continuar.',
  'generic_trial_ends_at' => 'Seu teste gratuito termina em :ends dias! Adicione informações de faturamento e escolha um plano para continuar.',
  'resume_subscription' => 'Sua assinatura termina em :ends dias! Retome sua assinatura para continuar.',
  'choose_subscription' => 'Escolha a assinatura que melhor se adapta ao seu estilo.',
  'trouble_validating_card' => 'Ocorreu um problema ao validar seu cartão. Pode ser que o fornecedor do cartão esteja nos impedindo de cobrar o cartão. Entre em contato com o provedor do cartão ou com o suporte ao cliente.',
  'subscription_expired' => 'Sua assinatura expirou! Escolha uma assinatura para continuar.',
  'using_more_resource' => 'Você está usando mais recursos do que o plano :plan permitido. Use um plano adequado ao seu negócio.',
  'cant_add_more_user' => 'Seu plano de assinatura atual não permite adicionar mais usuários. Se sua empresa precisa de mais usuários para gerenciar, atualize seu plano.',
  'cant_add_more_inventory' => 'Você atingiu o limite máximo de ações alocadas para seu plano de assinatura atual. Atualize seu plano para estender o limite.',
  'time_to_upgrade_plan' => 'É uma boa hora para atualizar seu plano',
  'only_merchant_can_change_plan' => 'Apenas o dono da loja pode alterar o plano de faturamento / assinatura.',
  'message_send_failed' => 'Desculpe, a mensagem não pode ser enviada agora! Por favor, tente novamente mais tarde.',
  'resource_uses_out_of' => ':used de :limit',
  'cant_charge_application_fee' => 'Você não pode cobrar <b> comissão do marketplace </b> e por> taxa de transação </b> com este método de pagamento. Essa é uma boa opção se você cobrar apenas a taxa de inscrição.',
  'license_uninstalled' => 'Licença desinstalada.',
  'license_updated' => 'Licença atualizada.',
  'take_a_backup' => 'Você pode tirar um instantâneo do backup do banco de dados. Certifique-se de ter configurado as preferências de backup antes de executar esta ação. Certifique-se de que o <code> mysqldump </code> esteja instalado em seu servidor. Verifique a documentação para obter ajuda.',
  'backup_done' => 'Backup feito com sucesso!',
  'inventory_exist' => 'O produto já existe em seu estoque. Atualize a lista existente em vez de criar uma lista duplicada.',
  'inventory_not_found' => 'O produto não foi encontrado em seu estoque. Por favor, atualize o inventário e tente novamente.',
  'notice' => [
    'no_billing_address' => 'Este cliente ainda não possui endereço de cobrança configurado. Adicione um endereço de cobrança antes de criar um pedido.',
    'no_active_payment_method' => 'Sua loja não tem método de pagamento ativo. Por favor, ative pelo menos um método de pagamento para aceitar o pedido.',
    'no_shipping_option_for_the_zone' => 'Nenhuma zona de envio disponível para esta área. Crie uma nova zona de envio ou adicione esta área de envio a uma zona existente.',
    'no_rate_for_the_shipping_zone' => 'A zona de envio <strong> :zone </strong> não tem taxas de envio. Por favor crie taxas de envio para aceitar pedidos desta zona.',
    'cant_cal_weight_shipping_rate' => 'Não é possível calcular a taxa de envio com base no peso. Porque o peso não está definido para alguns itens.',
  ],
  'no_changes' => 'Nada para mostrar',
  'no_orders' => 'Nenhum pedido encontrado!',
  'no_history_data' => 'Sem informações para mostrar',
  'this_slug_taken' => 'Esta lesma foi levada! Experimente um novo.',
  'slug_length' => 'O slug deve ter no mínimo três caracteres.',
  'message_count' => 'Você tem :count mensagens',
  'notification_count' => 'Você tem :count notificações não lidas',
  'alert' => 'Alerta!',
  'dispute_appealed' => 'Uma disputa apelou',
  'appealed_dispute_replied' => 'Nova resposta para contestação de disputa',
  'thanks' => 'obrigado',
  'regards' => 'Saudações ,',
  'ticket_id' => 'ID do bilhete',
  'category' => 'Categoria',
  'subject' => 'Sujeito',
  'prioriy' => 'Prioridade',
  'amount' => 'Montante',
  'shop_name' => 'Nome da loja',
  'customer_name' => 'Nome do cliente',
  'shipping_address' => 'Endereço de entrega',
  'billing_address' => 'Endereço de cobrança',
  'shipping_carrier' => 'Transportadora',
  'tracking_id' => 'ID de rastreamento',
  'order_id' => 'ID do pedido',
  'payment_method' => 'Forma de pagamento',
  'payment_status' => 'Status do pagamento',
  'order_status' => 'Status do pedido',
  'status' => 'Status',
  'unread_notification' => 'Notificação não lida',
  'system_is_live' => 'O Marketplace está de volta ao VIVO!',
  'system_is_down' => 'O mercado vai PARA BAIXO!',
  'system_config_updated' => 'Configuração do sistema atualizada!',
  'system_info_updated' => 'Informações do sistema atualizadas!',
  'temp_password' => 'Senha temporária: :password',
  'shop_created' => 'A loja :shop_name foi criada!',
  'shop_updated' => 'As informações da loja foram atualizadas!',
  'shop_config_updated' => 'A configuração da loja foi atualizada!',
  'shop_down_for_maintainace' => 'A loja ABAIXO!',
  'shop_is_live' => 'A loja está de volta ao VIVO!',
  'ticket_replied' => 'O tíquete foi respondido',
  'ticket_updated' => 'Ingresso foi atualizado',
  'ticket_created' => 'Um novo bilhete foi criado',
  'ticket_assigned' => 'Um novo tíquete foi atribuído a você',
  'we_will_get_back_to_you_soon' => 'Envie-nos uma mensagem e entraremos em contato com você em breve!',
  'faqs' => 'Perguntas mais frequentes',
  'how_the_marketplace_works' => 'É bom saber como o sistema funciona, antes de se registrar',
  'merchant_benefits' => 'Vender online nunca foi tão fácil.',
  'import_ignored' => 'Algumas linhas foram ignoradas! Verifique as informações e importe novamente.',
  'import_demo_contents' => 'Importar o conteúdo da demonstração removerá todos os dados do banco de dados e redefinirá todas as configurações, exceto as configurações do arquivo <small> (o .env e outros arquivos de configuração em configs / diretório) </small>. O sistema voltará para uma nova instalação. <br/> <b> Você não pode reverter esta ação. </b>',
  'env_saved' => 'O arquivo .env foi salvo com sucesso!',
  'modify_environment_file' => 'Tenha cuidado ao trabalhar com arquivos .env. Este é o arquivo de configuração principal e o sistema irá quebrar se você fizer algo errado aqui. Faça um backup sempre que quiser fazer alguma modificação. <br/> <b> Você não pode reverter esta ação. </b>',
  'be_careful_sensitive_area' => 'Tenha cuidado com suas ações! Estas configurações são muito sensíveis e o sistema pode quebrar se você fizer algo errado aqui. <br/> <b> Você não pode reverter algumas dessas ações. </b>',
  'unfulfilled_percents' => ':percent% do total de pedidos de hoje',
  'update_app_license' => 'Atualiza a licença se o endereço IP do seu servidor foi alterado, então o script continua a funcionar no novo IP.',
  'uninstall_app_license' => 'Desinstalar a licença permitirá que você reinstale o script e a instalação atual parará de funcionar imediatamente. Remova os arquivos de instalação antigos para evitar problemas inesperados com a nova instalação. <br/> <b> Você não pode reverter esta ação. </b>',
  'last_30_days_percents' => ':percent% :state em 30 dias',
  'stock_out_percents' => ':percent% do total de :total itens',
  'todays_sale_percents' => ':percent% :state de ontem',
  'no_sale' => 'Sem venda :date',
  'loogedin_as_admin' => 'Você já está logado como um usuário administrador.',
  'permission' => [
    'denied' => 'Permissão negada!',
  ],
  'listings_not_visible' => 'Suas listagens não são visíveis no front end. Porque: :reason',
  'no_active_payment_method' => 'Sua loja não tem método de pagamento ativo.',
  'no_active_shipping_zone' => 'Sua loja não tem zona de entrega ativa. Crie zonas de envio para aceitar o pedido.',
  'your_shop_in_hold' => 'Sua loja está em espera! Iremos revisar e aprovar sua loja o mais rápido possível!',
  'youe_shop_in_maintenance_mode' => 'A loja em modo de manutenção.',
  'how_id_verification_helps' => 'Como a verificação de identidade ajuda',
  'how_the_verification_process_works' => 'Como funciona o processo',
  'subscription_updated' => 'A assinatura foi atualizada com sucesso!',
  'subscription_update_failed' => 'A atualização da assinatura falhou! Consulte o arquivo de log para obter detalhes.',
  'misconfigured_google_analytics' => 'O relatório do Google Analytics está ativado, mas não configurado ou configurado incorretamente! Verifique a documentação para obter ajuda.',
  'pending_approvals' => '[0,1] :count Aprovação pendente precisa de ação | [2, *] :count Aprovações pendentes precisam de ação',
  'pending_verifications' => '[0,1] :count Verificação pendente precisa de ação | [2, *] :count Verificações pendentes precisam de ação',
  'verification_intro' => 'Assim que você for verificado, exibiremos o emblema <strong> verificado </strong> em sua empresa e na página de perfil de sua loja. Isso permite que sua empresa construa confiança no mercado.',
  'verification_process' => '<ul>
            <li> Você tira uma foto ou digitaliza seu documento de identidade (passaporte, carteira de habilitação ou documento de identidade oficial) usando uma câmera HD e faz upload </li>
            <li> Faça upload do comprovante do seu endereço (carteira de habilitação, recibo de imposto sobre a propriedade, fatura de serviços públicos ou contrato de arrendamento) </li>
            <li> Você tira ou carrega uma foto do seu rosto. </li>
            <li> Verificaremos se são fotos da mesma pessoa. </li>
            <li> Você não pode usar a mesma documentação (carteira de habilitação) para verificação de identidade e endereço. </li>
        </ul>',
  'what_the_verification_documents_need' => 'Quais documentos de identidade formais eu preciso?',
  'verification_documents' => 'Você pode usar: <ul>
            <li> seu passaporte </li>
            <li> sua carteira de habilitação </li>
            <li> um documento de identidade oficial. </li>
            <li> recibo de imposto de propriedade </li>
            <li> contas de serviços públicos </li>
            <li> contrato de locação </li>
        </ul>
        Carteiras de habilitação e documentos de identidade emitidos pelo governo devem ser feitos de plástico. Todos os IDs devem ser válidos.',
  'verified_business_name_like' => 'O nome da sua empresa será mostrado assim',
  'csv_import_process_started' => 'Os dados foram enviados com sucesso. O processo pode demorar alguns mínimos. Você receberá um e-mail quando terminar.',
  'model_has_association' => 'O :model tem :associate nele. Para excluir este :model, remova todos os :associate sob o :model',
  'active_worldwide_business_area' => 'O status não afetará, pois a área de negócios do marketplace está definida como mundial! Para alterar as configurações da área de negócios, verifique a seção de configuração.',
  'please_select_conversation' => 'Selecione uma conversa à esquerda.',
  'session_expired' => 'Sua sessão expirou! Por favor entre.',
  'no_address_for_invoice' => 'Você ainda não configurou um endereço comercial. Adicione o endereço agora.',
  'package_settings_updated' => 'Configurações do pacote atualizadas',
  'next_billing_date' => 'A próxima data de faturamento da assinatura é <strong>: data </strong> Mantenha saldo suficiente em sua carteira para continuar.',
  'package_installed_success' => 'O módulo :package foi instalado com sucesso!',
  'package_installed_already' => 'O módulo :package já está instalado!',
  'package_uninstalled_success' => 'O módulo :package foi desinstalado com sucesso!',
  'cancellation_require_admin_approval' => 'O cancelamento requer a aprovação do administrador. Uma taxa de cancelamento pode ser aplicada.',
  'a_cancellation_fee_be_charged' => 'Uma taxa de cancelamento de <strong>: taxa </strong> será cobrada',
  'order_will_be_cancelled_instantly' => 'O pedido será cancelado instantaneamente.',
  'not_accessible_on_demo' => 'Este conteúdo não está acessível no modo de demonstração!',
  'updated_deal_of_the_day' => 'Oferta do dia atualizada com sucesso.',
  'updated_tagline' => 'Tagline atualizado com sucesso.',
  'featured_brands_updated' => 'Marcas em destaque atualizadas com sucesso.',
  'featured_items_updated' => 'Itens em destaque atualizados com sucesso.',
  'best_finds_under_updated' => 'As melhores descobertas foram atualizadas com sucesso.',
  'trending_now_category_updated' => 'A categoria Tendências agora foi atualizada com sucesso.',
  'trending_categories_update_failed' => 'Você pode adicionar no máximo :limit categoria de tendência',
  'misconfigured_subscription_stripe' => 'O sistema encontrou assinaturas de tarturas mal configuradas. Por favor, verifique suas configurações. Leia a documentação se precisar de ajuda.',
  'misconfigured_subscription_wallet' => 'Carteira baseada em assinatura necessária carteira e pacotes de assinatura local para funcionar. Entre em contato com a equipe de suporte para obter ajuda. O sistema tentará usar a assinatura da listra, a menos que esses requisitos sejam atendidos.',
  'some_item_out_of_stock' => 'Poucos itens não estão disponíveis agora. Nós adicionamos todo o item disponível',
];
