# Tutorial: Migrando do Windows para o Linux

## Agora vamos preparar um ambiente de desenvolvimento com as ferramentas mais utilizadas na InfoJr

### O que é o "apt-get"?

> "Os desenvolvedores da distribuição Debian Linux criaram o APT (Advanced Packaging Tool),
> uma ferramenta para instalar e atualizar pacotes (e suas dependências) de maneira rápida e prática." -
> [Emerson Alecrim](http://www.infowester.com/aptget1.php)

### O que significa "sudo"?

> "O comando sudo do sistema operacional Unix permite a usuários comuns obter privilégios de outro usuário,
> em geral o super usuário, para executar tarefas específicas dentro do sistema de maneira segura e controlável
> pelo administrador. O nome é uma forma abreviada de se referir a **s**ubstitute **u**ser **do** (fazer substituindo usuário)
> ou **s**uper **u**ser **do** (fazer como super usuário)." -
> [Wikipédia](https://pt.wikipedia.org/wiki/Sudo)

### Atualize o apt-get

```Linux
sudo update apt-get
```

### Aprimore o apt-get

```Linux
sudo upgrade apt-get
```

### Instale o apache2

> Apache é a ferramenta responsável por criar um servidor local na sua máquina,
> que por padrão é acessado como "http://localhost/".

```Linux
sudo apt-get install apache2
```

### Instale o PHP 5

> PHP é uma linguagem que permite os sites terem uma lógica. A diferença do PHP a linguagens
> semelhantes como o JavaScript é que o PHP é executado apenas no servidor.

```Linux
sudo apt-get install php5
```

> "O MySQL é um sistema gerenciador de banco de dados relacional de código aberto usado na maioria das
> aplicações gratuitas para gerir suas bases de dados. O serviço utiliza a linguagem SQL
> (Structure Query Language – Linguagem de Consulta Estruturada), que é a linguagem mais popular para inserir,
> acessar e gerenciar o conteúdo armazenado num banco de dados." -
> [Pedro Pisa](http://www.techtudo.com.br/artigos/noticia/2012/04/o-que-e-e-como-usar-o-mysql.html)

### Instale o servidor do MySQL

```Linux
sudo apt-get install mysql-server
```

### Instale o cliente do MySQL

```Linux
sudo apt-get install mysql-client
```

### Instale o Git

> Git é uma ferramenta de controle de versão de arquivos. Ele permite que pessoas contribuam, editem
> e criem arquivos simultaneamente sem que haja o risco das alterações sobrescreverem umas as outras.

```Linux
sudo apt-get install git
```

### Instale o phpmyadmin

```Linux
sudo apt-get install phpmyadmin
```

- Melhora o apt-get: sudo upgrade apt-get
(De preferência, não definir senha pra “root” nos próximos:)
- Instala apache2: sudo apt-get install apache2
- Instala PHP5:  sudo apt-get install php5
- Instala servidor mysql:  sudo apt-get install mysql-server
- Instala cliente mysql:  sudo apt-get install mysql-client (sudo apt-get install php5-mysql)
- Instala npm: sudo apt-get install npm
- Instala git: sudo apt-get install git
- Instalar phpmyadmin: phpmyadmin.net (extrair em /www e renomear pra phpmyadmin)
- Reiniciar servidor: sudo /etc/init.d/apache2 restart
- Instala SublimeText3: sudo add-apt-repository ppa:webupd8team/sublime-text-3 && sudo apt-get update && sudo apt-get install sublime-text-installer
	Package control do Sublime (View > Show console):
import urllib.request,os,hashlib; h = 'eb2297e1a458f27d836c04bb0cbaf282' + 'd0e7a3098092775ccb37ca9d6b2e4b7d'; pf = 'Package Control.sublime-package'; ipp = sublime.installed_packages_path(); urllib.request.install_opener( urllib.request.build_opener( urllib.request.ProxyHandler()) ); by = urllib.request.urlopen( 'http://packagecontrol.io/' + pf.replace(' ', '%20')).read(); dh = hashlib.sha256(by).hexdigest(); print('Error validating download (got %s instead of %s), please try manual install' % (dh, h)) if dh != h else open(os.path.join( ipp, pf), 'wb' ).write(by)
	Plugins do Sublime: Emmet, GitGutter, Brackect highlighter, color highlighter, jquery
	Configurar Tabulação do Sublime (Preferences > Settings-user):
{
"color_scheme": "Packages/Color Scheme - Default/Monokai.tmTheme",
"ensure_newline_at_eof_on_
"font_size": 10,
"ignored_packages":
[
"Vintage"
],
"tab_size": 4,
"translate_tabs_to_spaces": true,
"trim_trailing_white_space_on_
}

	(Além disso, verificar se está “Tab width: 4” e desmarcada “indent with spaces”)
Não esquecer de dar permissão a todas as pastas que você precisar rsrsrs: sudo chmod 777 /var/www/

Ref: http://www.unixmen.com/how-to-install-lamp-stack-on-ubuntu-15-10/
