# Histórico de Solicitações do Usuário
## Sessão: Caso Google Ads - Site Comprometido

**Data:** 19 de novembro de 2025
**Contexto:** Resolução de problema de reprovação Google Ads

---

## Solicitação 1 - Início da Sessão

**Mensagem:**
> Me ajude a refletir sobre possiblidade de como resolver esse problema (pdf em anexo)
> Não edite nada sem minha autorização explícita

**Anexo fornecido:**
- PDF: Gmail - [1-5281000040376] Suporte Google Ads - Site comprometido.pdf

**Ação tomada:**
- Análise do PDF
- Levantamento de hipóteses sobre o problema
- Apresentação de possíveis causas e estratégias de solução

---

## Solicitação 2 - Feedback sobre Hipóteses

**Mensagem:**
> Para registro:
> - 1. Cache histórico do Google > Sim, é possível e essa é minha maior suspeita;
> - 2. DNS Wildcard > Verificado no servidor de hospedagem e na RegistroBR, não há nenhum Wildcard configurado;
> - 3. Comprometimento anterior da hospedagem > Sim, é possível e essa também é a hipótese mais provável;
> - 4. Indexação do Google > Estou trabalhando nesse ponto ainda, logo mais informo novo feedback.
>
> Apenas registre e aguarde novs instruções.

**Ação tomada:**
- Registro das hipóteses confirmadas/descartadas
- Aguardando novas instruções

---

## Solicitação 3 - Evidência Wayback Machine

**Mensagem:**
> Para registro, também:
> - Fiz um teste neste site "https://web.archive.org/"
> - O subdomínio "piramidal.tendasbrasil.com.br" aparece em alguns períodos no passado;
>
> Apenas registre e aguarde novs instruções...

**Anexo fornecido:**
- Screenshot: Wayback Machine mostrando 7 capturas entre set/2023 e dez/2024

**Ação tomada:**
- Registro da evidência
- Confirmação da hipótese de existência passada do subdomínio
- Atualização do status das hipóteses

---

## Solicitação 4 - Mudanças na Infraestrutura

**Mensagem:**
> Registre mais esses procedimentos e modificações:
> - Inicialmente (antes) todos os apontamentos DNS eram feitos na RegistroBR (vide imagem anexa);
> - Eu deletei todos os registros e recriei, mas de outra forma, apontando para servidores NS (ns1.uebb.com.br, ns2.uebb.com.br, ns3.uebb.com.br e ns4.uebb.com.br);
> - O servidor de hospedagem é o mesmo (IP 199.193.117.162), porém, como é uma revenda (que é nossa, nós (Uébb Digital) administramos), nós deletamos a conta de hospedagem e depois a recriamos (para o mesmo domínio: tendasbrasil.com.br);
> - Agora, os apontamentos que antes eram feitos na RegistroBR, agora são feitos (resolvidos) em nosso servidor de hospedagem. O intuito aqui foi, de alguma forma, mudar a rota de leitura do Google, talvez isso possa força-lo (de alguma forma) a rever alguma questão que está armazenada internamente;
> - No painel (cPanel) da hospedagem, eu criei o subdominio "piramidal.tendasbrasil.com.br" e nele configurei (via .htaccess) um redirect do tipo 301 (permanente) que aponta o subdominio para o domínio principal (raiz - tendasbrasil.com.br) - imagens anexa;
>
> Apenas registre e aguarde novs instruções...

**Anexos fornecidos:**
- Screenshots da zona DNS no Registro.br
- Screenshots do Zone Editor no cPanel
- Screenshots dos domínios configurados no cPanel
- Screenshots do redirecionamento 301 configurado

**Ação tomada:**
- Registro completo das mudanças de infraestrutura
- Documentação da estratégia de "tomar controle" do subdomínio
- Aguardando novas instruções

---

## Solicitação 5 - Verificações Google

**Mensagem:**
> Registre mais esses procedimentos e modificações:
> - Adicionei a propriedade do subdominio "piramidal.tendasbrasil.com.br" ao Google Search Console, nenhum problema detectado (imagem anexa);
> - Não há conteúdo indexado para o subdomínio em questão - imagem anexa;
> - Verificação do domínio principal e subdominio (piramidal...) no Google Safe Browsing (imagem anexa);
>
> Apenas registre e aguarde novs instruções.

**Anexos fornecidos:**
- Screenshot Google Search Console - Inspeção de URL
- Screenshot Google Safe Browsing - domínio principal
- Screenshot Google Safe Browsing - subdomínio
- Screenshot Google Search Console - Problemas de segurança
- Screenshot busca Google (site:piramidal.tendasbrasil.com.br)

**Ação tomada:**
- Registro das verificações no Google Search Console
- Registro das verificações no Safe Browsing
- Documentação da discrepância entre sistemas do Google
- Aguardando novas instruções

---

## Solicitação 6 - DNS Checker

**Mensagem:**
> Apenas mais um registro, antes de irmos para a próxima etapa:
> - DNS Checker.ORG agora visualiza o subdominio "piramidal.tendasbrasil.com.br" apontando para o nosso servidor (199.193.117.162);
>
> Apenas registre e aguarde novs instruções.

**Anexo fornecido:**
- Screenshot DNS Checker mostrando propagação global confirmada

**Ação tomada:**
- Registro da propagação DNS global
- Confirmação de que o subdomínio está sob controle
- Aguardando novas instruções

---

## Solicitação 7 - Criação de Documentação e E-mail (ATUAL)

**Mensagem:**
> - Analise toda essa nossa conversa (histórico completo dessa sessão) e crie um documento completo e detalhado de todo o contexto, salve este documento .MD no diretório "wp-content/themes/uebb-tendasbrasil/_google-ads";
> - Ainda dentro do diretório "wp-content/themes/uebb-tendasbrasil/_google-ads", crie um diretório "anexos" e coloque lá todos os anexos que enviei aqui, nesta conversa (se possível), se não for possível, farei isso manualmente;
> - Depois, e por último, Me ajude a escreve um e-mail ao Ricardo, relatando tudo o que foi feito, o que foi modificado e implementado, quais são as nossas suspeitas e hipóteses do que pode estar havendo, e solicite novamente a revisão por parte do time técnico, para que seja feita uma nova análise, não só do que está no sistema do Google, mas manualmente, tanto do domínio, do subdominio e questão, para onde ele aponta, que ele está agora dentro da nossa hospedagem e reapontando para o dominio raiz (principal), e que pelo amor de Deus, que nos ajude a resolver isso pois não sabemos mais o que fazer.

**Ações solicitadas:**
1. ✅ Criar documento .MD completo no diretório especificado
2. ✅ Criar diretório "anexos"
3. ⚠️ Colocar anexos no diretório (não é possível via ferramenta - será feito manualmente)
4. 🔄 Redigir e-mail para Ricardo (Google Ads)

---

## Observações Importantes

### Postura do Usuário
- Metódico e organizado
- Documenta cada passo
- Solicita confirmação antes de alterações
- Profissional técnico experiente

### Padrão de Comunicação
- Instruções claras e objetivas
- "Apenas registre e aguarde novas instruções"
- Fornecimento de evidências visuais (screenshots)
- Validação de hipóteses antes de prosseguir

### Estratégia Adotada
1. Investigação exaustiva inicial
2. Identificação de evidência histórica (Wayback Machine)
3. Reestruturação completa da infraestrutura
4. Verificações em múltiplas plataformas Google
5. Documentação detalhada
6. Comunicação formal com Google Ads

---

**Documento gerado em:** 19 de novembro de 2025
**Finalidade:** Registro histórico das solicitações para referência futura
