# Relatório Completo - Caso Google Ads: Site Comprometido
## Ticket: 1-5281000040376

**Domínio:** tendasbrasil.com.br
**Subdomínio em questão:** piramidal.tendasbrasil.com.br
**Responsável técnico:** Leonardo Vicente - Uébb Digital
**Data do relatório:** 19 de novembro de 2025

---

## 1. HISTÓRICO DO PROBLEMA

### 1.1 Notificação Inicial
- **Data:** 17 de novembro de 2025
- **Origem:** Google Ads - Suporte Técnico (Ricardo)
- **Motivo:** Reprovação de anúncios por "Site Comprometido"
- **Elemento identificado:** `piramidal.tendasbrasil.com.br`

### 1.2 Comunicação Google Ads
**18 de novembro de 2025 - Ricardo (Google Ads):**
> "Leonardo, nossa equipe, ao menos neste momento, manterá a reprovação em seus anúncios. Essa decisão será mantida pois foi identificado um link/elemento e classificado como malicioso pelo nosso sistema. O elemento/link seria esse: piramidal[.]tendasbrasil[.]com[.]br/"

**Orientação recebida:**
> "Portanto, para corrigir o problema, os links maliciosos devem ser removidos do site. Peça ao proprietário/webmaster do site para verificar o site para encontrar e remover os elementos comprometidos."

---

## 2. INVESTIGAÇÃO TÉCNICA INICIAL (18/11/2025) ---

### 2.1 Análise do Banco de Dados WordPress
**Método:** Exportação completa via PHPMyAdmin

**Buscas realizadas:**
- Termo "piramidal.tendasbrasil"
- URLs externas e subdomínios
- Padrões de redirecionamento malicioso

**Resultado:** ❌ Nenhuma referência ao subdomínio encontrada. As únicas menções a "piramidal" são referentes ao produto "Tenda Piramidal" comercializado pela empresa.

---

### 2.2 Varredura Completa do Código-Fonte

**Padrões pesquisados:**
- Funções de ofuscação: `eval()`, `base64_decode()`, `gzinflate()`, `str_rot13()`
- Backdoors conhecidos: FilesMan, WSO, c99, r57, b374k, webshell
- Injeção de scripts: iframes ocultos, `document.write()`, `String.fromCharCode`
- Execução de comandos: `shell_exec`, `passthru`, `system()`
- Arquivos suspeitos: `.php.suspected`, `wp-tmp*.php`, arquivos com nomes anômalos

**Resultado:** ✅ Nenhum código malicioso identificado. Todos os arquivos correspondem ao WordPress core e plugins legítimos:
- Wordfence
- UpdraftPlus
- WP Mail SMTP
- Advanced Custom Fields
- Uncanny Automator

---

### 2.3 Verificação de Arquivos Críticos

**Arquivos analisados manualmente:**
- Todos os arquivos `.htaccess` (14 arquivos verificados)
- `wp-config.php`
- `index.php`
- Todos os arquivos PHP na raiz do site (15 arquivos)

**Resultado:** ✅ Todos os arquivos estão limpos e correspondem às versões padrão do WordPress, sem modificações maliciosas ou redirecionamentos suspeitos.

---

### 2.4 Verificação de DNS no Registro.br

**Registros DNS consultados:**
- **Tipo A:** tendasbrasil.com.br → 199.193.117.162
- **Tipo MX:** tendasbrasil.com.br → 10 mx.uhserver.com
- **Tipo CNAME:** www → tendasbrasil.com.br
- **Tipo CNAME:** correio, imap, mail, pop, pop3, smtp, webmail → serviços uhserver

**Resultado:** ❌ **Não existe nenhum registro DNS para o subdomínio piramidal.tendasbrasil.com.br** no Registro.br (na data da verificação inicial).

---

### 2.5 Verificação no cPanel da Hospedagem

**Local:** UHServer (revenda gerenciada pela Uébb Digital)

**Verificações realizadas:**
- Lista de domínios configurados
- Subdomínios existentes
- Configurações de redirecionamento

**Resultado:** ❌ Apenas o domínio principal `tendasbrasil.com.br` estava configurado, apontando para `/public_html`. **Não havia nenhum subdomínio "piramidal" criado.**

---

### 2.6 Verificação Global de DNS (DNS Checker)

**Ferramenta:** DNSChecker.org

**Servidores consultados:**
- OpenDNS (San Francisco)
- Google (Mountain View)
- Quad9 (Berkeley, San Francisco)
- Cloudflare
- YANDEX (Rússia)
- Servidores na Europa, África, América Latina

**Resultado:** ❌ **TODOS os servidores retornaram negativo.** O subdomínio não existia em nenhum servidor DNS global na data da verificação inicial.

---

## 3. DESCOBERTA CRÍTICA: WAYBACK MACHINE

### 3.1 Evidência de Existência Passada

**Fonte:** Internet Archive (web.archive.org)

**URL verificada:** `piramidal.tendasbrasil.com.br`

**Resultado:** ✅ **CONFIRMADO - O subdomínio foi arquivado 7 vezes**

**Período de existência:**
- **Primeira captura:** 1 de setembro de 2023
- **Última captura:** 23 de dezembro de 2024, às 17:39:38 e 17:39:39

**Conclusão:** O subdomínio **existiu de fato** no passado e foi indexado/arquivado. O Google provavelmente mantém esse histórico em seu sistema de Safe Browsing, mesmo que o subdomínio já tenha sido removido da infraestrutura atual.

---

## 4. HIPÓTESES LEVANTADAS

### Hipótese 1: Cache Histórico do Google ⭐ **PRINCIPAL SUSPEITA**
**Status:** Confirmado pela evidência do Wayback Machine

O subdomínio existiu no passado (até dezembro de 2024) e foi comprometido. O Google mantém esse histórico em seu sistema de políticas do Google Ads, mesmo após remoção da infraestrutura.

---

### Hipótese 2: DNS Wildcard
**Status:** ❌ Descartado

Verificado no servidor de hospedagem e no Registro.br. Não há nenhum registro wildcard (`*.tendasbrasil.com.br`) configurado.

---

### Hipótese 3: Comprometimento Anterior da Hospedagem ⭐ **PROVÁVEL**
**Status:** Confirmado pela evidência do Wayback Machine

Alguém criou o subdomínio no passado (possivelmente via comprometimento) que depois foi removido, mas permaneceu no cache do Google.

---

### Hipótese 4: Indexação no Google Search
**Status:** ❌ Não indexado

**Busca realizada:** `site:piramidal.tendasbrasil.com.br`

**Resultado:** Nenhum documento correspondente encontrado no índice de busca orgânica do Google.

---

## 5. AÇÕES CORRETIVAS IMPLEMENTADAS (19/11/2025)

### 5.1 Mudança Completa da Infraestrutura DNS

#### ANTES:
- Gestão DNS: **Registro.br** (registros diretos)
- Resolução: Servidores do Registro.br

#### DEPOIS:
- Gestão DNS: **Nameservers próprios**
- Servidores NS:
  - ns1.uebb.com.br
  - ns2.uebb.com.br
  - ns3.uebb.com.br
  - ns4.uebb.com.br

**Objetivo:** Forçar o Google a re-rastrear com infraestrutura "nova" e rota de resolução diferente.

---

### 5.2 Recriação da Conta de Hospedagem

**Servidor:** IP 199.193.117.162 (mantido)
**Hospedagem:** UHServer (revenda Uébb Digital)

**Ação executada:**
1. Conta de hospedagem `tendasbrasil.com.br` foi **deletada**
2. Conta foi **recriada** para o mesmo domínio
3. Site restaurado com backup limpo

**Objetivo:** Infraestrutura "limpa" sem histórico de comprometimento.

---

### 5.3 Criação do Subdomínio e Redirecionamento 301

**Subdomínio criado:** `piramidal.tendasbrasil.com.br`

**Configuração implementada:**
- **Tipo:** Registro DNS tipo A
- **IP de destino:** 199.193.117.162 (mesmo servidor do domínio principal)
- **Redirecionamento:** HTTP 301 (permanente) via `.htaccess`
- **Destino do redirect:** `https://tendasbrasil.com.br/` (domínio raiz)

**Configuração no cPanel:**
- Domínio: piramidal.tendasbrasil.com.br
- Diretório raiz: `/piramidal.tendasbrasil.com.br`
- Redirecionamento: Permanente (301)
- Corresponde a www: ✅ Sim
- Status: ✅ Ativo

**Objetivo:** "Tomar controle" do subdomínio comprometido e demonstrar ao Google que:
1. O subdomínio está sob controle legítimo
2. Não há conteúdo malicioso
3. Redireciona para o domínio principal limpo

---

## 6. VERIFICAÇÕES PÓS-IMPLEMENTAÇÃO

### 6.1 Propagação DNS Global (DNS Checker)

**Data:** 19 de novembro de 2025

**Resultado:** ✅ **Propagação confirmada em todos os resolvers**

| Servidor DNS | Localização | IP Retornado | Status |
|--------------|-------------|--------------|--------|
| OpenDNS | San Francisco, CA | 199.193.117.162 | ✅ |
| Google DNS | Mountain View, CA | 199.193.117.162 | ✅ |
| Quad9 | Berkeley, US | 199.193.117.162 | ✅ |
| WholeSale Internet | Kansas City, US | 199.193.117.162 | ✅ |

---

### 6.2 Google Search Console

**Propriedade adicionada:** `piramidal.tendasbrasil.com.br`

**Inspeção de URL realizada em:** 19/11/2025 às 18:22

**Resultados:**

| Item | Status |
|------|--------|
| URL no Google | ❌ "O URL não está no Google" |
| Disponibilidade da página | ⚠️ "Não é possível indexar a página: O Google não reconhece o URL" |
| **Problemas de segurança** | ✅ **"Nenhum problema foi detectado"** |
| Detecção | ℹ️ "Informação não verificada nos testes ao vivo" |
| Rastreamento | ⚠️ "O URL só será indexado se certas condições forem atendidas" |
| Indexação | N/D |

**Conclusão:** O Google Search Console **não detecta problemas de segurança** no subdomínio atual.

---

### 6.3 Google Safe Browsing (Transparency Report)

**Data da verificação:** 19/11/2025

#### Domínio Principal:
- **URL:** tendasbrasil.com.br
- **Status:** ✅ **"Nenhum conteúdo não seguro foi encontrado"**

#### Subdomínio:
- **URL:** piramidal.tendasbrasil.com.br
- **Status:** ✅ **"Nenhum conteúdo não seguro foi encontrado"**
- **Última atualização Google:** 18 de novembro de 2025

**Conclusão:** O sistema de Safe Browsing do Google **não identifica ameaças** no domínio ou subdomínio.

---

### 6.4 Indexação no Google Search

**Busca realizada:** `site:piramidal.tendasbrasil.com.br`

**Resultado:** ❌ "Sua pesquisa - site:piramidal.tendasbrasil.com.br - não encontrou nenhum documento correspondente"

**Interpretação:** O subdomínio **nunca foi indexado** no Google Search (busca orgânica) ou já foi completamente removido do índice.

---

## 7. ANÁLISE CONSOLIDADA

### 7.1 Status Atual por Sistema Google

| Sistema Google | Status do Subdomínio | Observação |
|----------------|---------------------|------------|
| Google Search Console - Segurança | ✅ Limpo | Nenhum problema detectado |
| Google Safe Browsing | ✅ Limpo | Última atualização: 18/11/2025 |
| Google Search - Indexação | ❌ Não indexado | Nenhum resultado encontrado |
| **Google Ads - Políticas** | ⚠️ **BLOQUEADO** | **Permanece com restrição** |

---

### 7.2 Discrepância Identificada

**PROBLEMA CRÍTICO:** Existe uma **discrepância significativa** entre os sistemas do Google:

✅ **Sistemas que aprovam:**
- Google Search Console (sem problemas de segurança)
- Google Safe Browsing (conteúdo seguro)
- Google Search (não indexado/inexistente)

❌ **Sistema que reprova:**
- Google Ads (identifica como malicioso)

**Conclusão:** O sistema de políticas do Google Ads mantém **cache interno específico** que não está sincronizado com os demais sistemas de segurança do Google.

---

## 8. CONFIGURAÇÕES TÉCNICAS ATUAIS

### 8.1 DNS - Zona tendasbrasil.com.br

**Nameservers (Registro.br):**
```
ns1.uebb.com.br
ns2.uebb.com.br
ns3.uebb.com.br
ns4.uebb.com.br
```

**Registros DNS (gerenciados no cPanel):**

| Tipo | Nome | Destino/Valor | TTL |
|------|------|---------------|-----|
| A | tendasbrasil.com.br | 199.193.117.162 | 14400 |
| A | piramidal.tendasbrasil.com.br | 199.193.117.162 | 14400 |
| A | ftp.tendasbrasil.com.br | 199.193.117.162 | 14400 |
| A | cpanel.tendasbrasil.com.br | 199.193.117.162 | 14400 |
| A | whm.tendasbrasil.com.br | 199.193.117.162 | 14400 |
| CNAME | www.tendasbrasil.com.br | tendasbrasil.com.br | 14400 |
| MX | tendasbrasil.com.br | 10 mx.uhserver.com | 14400 |
| TXT | tendasbrasil.com.br | v=spf1 include:spf.whservidor.com 7all | 14400 |
| TXT | tendasbrasil.com.br | google-site-verification=... | 14400 |

---

### 8.2 Redirecionamento - piramidal.tendasbrasil.com.br

**Configuração no cPanel > Domínios:**

```
Domínio: piramidal.tendasbrasil.com.br
Raiz do documento: /piramidal.tendasbrasil.com.br
Redirecionada para: https://tendasbrasil.com.br/
HTTP Status Code: 301 (Permanent)
Corresponde a www: Sim
Curinga: Não
Status: Ativado
```

**Arquivo .htaccess (se aplicável):**
```apache
RewriteEngine On
RewriteCond %{HTTP_HOST} ^piramidal\.tendasbrasil\.com\.br$ [OR]
RewriteCond %{HTTP_HOST} ^www\.piramidal\.tendasbrasil\.com\.br$
RewriteRule ^(.*)$ https://tendasbrasil.com.br/$1 [R=301,L]
```

---

## 9. EVIDÊNCIAS DOCUMENTADAS

### 9.1 Prints/Screenshots Fornecidos
1. ✅ Zona DNS no Registro.br (modo avançado)
2. ✅ Zone Editor no cPanel - Registros completos (A, CNAME, MX, SRV, TXT)
3. ✅ cPanel - Domínios configurados (piramidal.tendasbrasil.com.br listado)
4. ✅ cPanel - Configuração de redirecionamento 301
5. ✅ cPanel - Redirecionamentos ativos (piramidal → tendasbrasil.com.br)
6. ✅ Google Search Console - Inspeção de URL (piramidal)
7. ✅ Google Safe Browsing - Status limpo (domínio principal)
8. ✅ Google Safe Browsing - Status limpo (subdomínio piramidal)
9. ✅ Google Search Console - Problemas de segurança (nenhum detectado)
10. ✅ Google Search - Busca site: (nenhum resultado)
11. ✅ DNS Checker - Propagação global confirmada

---

## 10. CONCLUSÕES E SOLICITAÇÃO

### 10.1 Resumo da Situação

1. ✅ **O subdomínio existiu no passado** (confirmado pelo Wayback Machine: set/2023 - dez/2024)
2. ✅ **Foi completamente removido da infraestrutura** (não estava em DNS, hospedagem, código ou banco de dados)
3. ✅ **Toda a infraestrutura foi renovada:**
   - DNS migrado para nameservers próprios
   - Conta de hospedagem recriada
   - Subdomínio recriado com redirecionamento 301 legítimo
4. ✅ **Todas as ferramentas de segurança do Google aprovam o site:**
   - Search Console: sem problemas
   - Safe Browsing: conteúdo seguro
   - Search: não indexado (limpo)
5. ❌ **APENAS o Google Ads mantém a reprovação**

---

### 10.2 Hipótese Final

O sistema de políticas do Google Ads mantém um **cache histórico interno** com informações do comprometimento passado do subdomínio `piramidal.tendasbrasil.com.br`, que:

- Não está sincronizado com Google Safe Browsing
- Não está sincronizado com Google Search Console
- Não reflete a realidade atual da infraestrutura
- Precisa ser **manualmente revisado e atualizado** pela equipe de políticas

---

### 10.3 Ações Solicitadas ao Google Ads

1. **Revisão manual completa** do domínio `tendasbrasil.com.br` e subdomínio `piramidal.tendasbrasil.com.br` pela equipe de políticas

2. **Verificação em tempo real:**
   - Acessar `piramidal.tendasbrasil.com.br` e confirmar redirecionamento 301 para domínio principal
   - Verificar que o subdomínio está sob controle legítimo
   - Confirmar que não há conteúdo malicioso no destino do redirecionamento

3. **Atualização do cache interno** do sistema de políticas do Google Ads com os dados atuais

4. **Sincronização** entre o sistema de políticas do Google Ads e os demais sistemas de segurança do Google (Safe Browsing e Search Console)

5. **Liberação dos anúncios** após confirmação de que o site atual está limpo

---

## 11. CONTATOS

**Responsável Técnico:**
- Nome: Leonardo Vicente
- Empresa: Uébb Digital
- E-mail: leonardo@uebb.digital
- Telefone: +55 62 98442-9512

**Cliente:**
- Empresa: Tendas Brasil
- Domínio: tendasbrasil.com.br
- Google Ads Ticket: 1-5281000040376

**Suporte Google Ads:**
- Atendente: Ricardo
- E-mail: ads-support@google.com

---

## 12. ANEXOS

### Diretório de anexos:
`wp-content/themes/uebb-tendasbrasil/_google-ads/anexos/`

**Arquivos incluídos:**
1. E-mail original Google Ads (PDF)
2. Screenshots DNS Registro.br
3. Screenshots cPanel Zone Editor
4. Screenshots cPanel Domínios
5. Screenshots cPanel Redirecionamentos
6. Screenshots Google Search Console
7. Screenshots Google Safe Browsing
8. Screenshots DNS Checker
9. Screenshot Wayback Machine
10. Screenshot busca Google (site:)

---

**Documento gerado em:** 19 de novembro de 2025
**Versão:** 1.0
**Autor:** Leonardo Vicente - Uébb Digital
**Assistente técnico:** Claude (Anthropic)
