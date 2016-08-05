<?xml version="1.0" encoding="utf-8"?>
<!-- generator="FeedCreator 1.7.2-ppt DokuWiki" -->
<?xml-stylesheet href="https://nixsrv.com/lib/exe/css.php?s=feed" type="text/css"?>
<rdf:RDF
    xmlns="http://purl.org/rss/1.0/"
    xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
    xmlns:slash="http://purl.org/rss/1.0/modules/slash/"
    xmlns:dc="http://purl.org/dc/elements/1.1/">
    <channel rdf:about="https://nixsrv.com/feed.php">
        <title>*nix spellbook</title>
        <description></description>
        <link>https://nixsrv.com/</link>
        <image rdf:resource="https://nixsrv.com/lib/tpl/vector/images/favicon.ico" />
       <dc:date>2015-04-11T08:58:17+00:00</dc:date>
        <items>
            <rdf:Seq>
                <rdf:li rdf:resource="https://nixsrv.com/doc/awk?rev=1426446946&amp;do=diff"/>
                <rdf:li rdf:resource="https://nixsrv.com/doc/irssi?rev=1426446870&amp;do=diff"/>
                <rdf:li rdf:resource="https://nixsrv.com/doc/apparmor?rev=1426446691&amp;do=diff"/>
                <rdf:li rdf:resource="https://nixsrv.com/doc/emacs_config?rev=1426445834&amp;do=diff"/>
                <rdf:li rdf:resource="https://nixsrv.com/doc/git?rev=1426445774&amp;do=diff"/>
                <rdf:li rdf:resource="https://nixsrv.com/doc/zabbix?rev=1426445658&amp;do=diff"/>
                <rdf:li rdf:resource="https://nixsrv.com/doc/gmail_monospaced_font?rev=1426445543&amp;do=diff"/>
                <rdf:li rdf:resource="https://nixsrv.com/doc/openvpn?rev=1426445496&amp;do=diff"/>
                <rdf:li rdf:resource="https://nixsrv.com/doc/sqlite?rev=1426445328&amp;do=diff"/>
                <rdf:li rdf:resource="https://nixsrv.com/doc/diskless_ubuntu?rev=1426445220&amp;do=diff"/>
                <rdf:li rdf:resource="https://nixsrv.com/doc/vimrc?rev=1426445103&amp;do=diff"/>
                <rdf:li rdf:resource="https://nixsrv.com/doc/email_notify_login?rev=1426444968&amp;do=diff"/>
                <rdf:li rdf:resource="https://nixsrv.com/doc/selinux?rev=1426444831&amp;do=diff"/>
                <rdf:li rdf:resource="https://nixsrv.com/doc/lxc?rev=1426444682&amp;do=diff"/>
                <rdf:li rdf:resource="https://nixsrv.com/doc/chef?rev=1426444165&amp;do=diff"/>
            </rdf:Seq>
        </items>
    </channel>
    <image rdf:about="https://nixsrv.com/lib/tpl/vector/images/favicon.ico">
        <title>*nix spellbook</title>
        <link>https://nixsrv.com/</link>
        <url>https://nixsrv.com/lib/tpl/vector/images/favicon.ico</url>
    </image>
    <item rdf:about="https://nixsrv.com/doc/awk?rev=1426446946&amp;do=diff">
        <dc:format>text/html</dc:format>
        <dc:date>2015-03-15T19:15:46+00:00</dc:date>
        <dc:creator>orl</dc:creator>
        <title>doc:awk - created</title>
        <link>https://nixsrv.com/doc/awk?rev=1426446946&amp;do=diff</link>
        <description>Awk

ps -C chrome -eo time,pid,comm | awk '{split($0,a,&quot;:&quot;);  t+=a[1]*3600+a[2]*60+a[3]; print $1 $2} END {print t}'</description>
    </item>
    <item rdf:about="https://nixsrv.com/doc/irssi?rev=1426446870&amp;do=diff">
        <dc:format>text/html</dc:format>
        <dc:date>2015-03-15T19:14:30+00:00</dc:date>
        <dc:creator>orl</dc:creator>
        <title>doc:irssi</title>
        <link>https://nixsrv.com/doc/irssi?rev=1426446870&amp;do=diff</link>
        <description>irssi irc client

irssi cheatsheet

/ignore -channels #mwsf * JOINS PARTS QUITS NICKS

.irrssi

settings = {
  core = {
    real_name = &quot;Unknown&quot;;
    user_name = &quot;name&quot;;
    nick = &quot;nick&quot;;
  };
  &quot;fe-text&quot; = { actlist_sort = &quot;refnum&quot;; };
  &quot;perl/core/scripts&quot; = {
    awl_columns = &quot;1&quot;;
    awl_placement = &quot;top&quot;;
    awl_height_adjust = &quot;4&quot;;
    awl_display_key_active = &quot;$Q%K|$N%n $H%U$C%n$S&quot;;
  };
  &quot;fe-common/core&quot; = {
    activity_hide_level = &quot;parts joins quits nicks modes&quot;;
  };
};
statusba…</description>
    </item>
    <item rdf:about="https://nixsrv.com/doc/apparmor?rev=1426446691&amp;do=diff">
        <dc:format>text/html</dc:format>
        <dc:date>2015-03-15T19:11:31+00:00</dc:date>
        <dc:creator>orl</dc:creator>
        <title>doc:apparmor</title>
        <link>https://nixsrv.com/doc/apparmor?rev=1426446691&amp;do=diff</link>
        <description>AppArmor cheatsheet

#chetsheet
    aa-status
    aa-disable /etc/apparmor.d/
    aa-enforce /etc/apparmor.d/
    aa-genprof /opt/google/chrome/google-chrome
    service apparmor restart
#google chrome
    https://launchpad.net/~apparmor-dev/+archive/ubuntu/apparmor-devel
    #TODO:
        #create google-chrome profile and sysdig it
        #write manual profile
        #do the same with other chrome components
    opt.google.chrome.google-chrome
    opt.google.chrome.nacl_helper_bootstrap
    …</description>
    </item>
    <item rdf:about="https://nixsrv.com/doc/emacs_config?rev=1426445834&amp;do=diff">
        <dc:format>text/html</dc:format>
        <dc:date>2015-03-15T18:57:14+00:00</dc:date>
        <dc:creator>orl</dc:creator>
        <title>doc:emacs_config - created</title>
        <link>https://nixsrv.com/doc/emacs_config?rev=1426445834&amp;do=diff</link>
        <description>vim .emacs
    (add-to-list 'load-path &quot;~/.emacs.d/undo-tree&quot;)
    (require 'undo-tree)
    (global-undo-tree-mode)

    (add-to-list 'load-path &quot;~/.emacs.d/evil&quot;)
    (require 'evil)
    (evil-mode 1)

    (custom-set-variables
     '(custom-enabled-themes (quote (dichromacy)))
     '(font-use-system-font t)
     '(show-paren-mode t))
    (custom-set-faces
     '(default ((t (:family &quot;Terminus (TTF)&quot; :foundry &quot;unknown&quot; :slant normal :weight normal :height 120 :width normal)))))

    (add-to-lis…</description>
    </item>
    <item rdf:about="https://nixsrv.com/doc/git?rev=1426445774&amp;do=diff">
        <dc:format>text/html</dc:format>
        <dc:date>2015-03-15T18:56:14+00:00</dc:date>
        <dc:creator>orl</dc:creator>
        <title>doc:git</title>
        <link>https://nixsrv.com/doc/git?rev=1426445774&amp;do=diff</link>
        <description>Git

    git log #show revisions
    git diff master~1:./sshd_config ./sshd_config #diff with last revision
    git log -p -1 filename #diff within git
    git diff stash@{0} master
    git show --name-only 18868173c
    git log -Spassword
    git diff-tree --no-commit-id --name-only -r bd61ad98
    git show --pretty=&quot;format:&quot; --name-only bd61ad98
    git diff HEAD^^..HEAD -- main.c</description>
    </item>
    <item rdf:about="https://nixsrv.com/doc/zabbix?rev=1426445658&amp;do=diff">
        <dc:format>text/html</dc:format>
        <dc:date>2015-03-15T18:54:18+00:00</dc:date>
        <dc:creator>orl</dc:creator>
        <title>doc:zabbix</title>
        <link>https://nixsrv.com/doc/zabbix?rev=1426445658&amp;do=diff</link>
        <description>Zabbix cheatsheet

Zabbix agent

# check parameter
    zabbix_get -s 127.0.0.1 -p 10050 -k &quot;psql.tx_commited&quot;
# custom parameters
    # disk subsystem usage, custom multiplier: 0.0009765625
        UserParameter=sda.blk_read, iostat sda | grep sda | awk '{print $5}'
        UserParameter=sda.blk_wrtn, iostat sda | grep sda | awk '{print $6}'
    # PostgreSQL monitoring
        # Total transactions per second
        UserParameter=psql.tx_commited, psql -U postgres -t -c &quot;select sum(xact_commit) …</description>
    </item>
    <item rdf:about="https://nixsrv.com/doc/gmail_monospaced_font?rev=1426445543&amp;do=diff">
        <dc:format>text/html</dc:format>
        <dc:date>2015-03-15T18:52:23+00:00</dc:date>
        <dc:creator>orl</dc:creator>
        <title>doc:gmail_monospaced_font - created</title>
        <link>https://nixsrv.com/doc/gmail_monospaced_font?rev=1426445543&amp;do=diff</link>
        <description># install sylish
    # css style:
        .ii, textarea {
        font-family: &quot;Terminus (TTF)&quot; !important;
        font-size: 12px !important;
        line-height: 1.1 !important;
    }

    .editable {
        font-family: &quot;Terminus (TTF)&quot; !important;
        font-size: 12px !important;
        line-height: 1.1 !important;
    }

    div
        {
            font-family: &quot;Terminus (TTF)&quot; !important;
            font-size: 12px !important;
        }

        textarea.dV
        {
            f…</description>
    </item>
    <item rdf:about="https://nixsrv.com/doc/openvpn?rev=1426445496&amp;do=diff">
        <dc:format>text/html</dc:format>
        <dc:date>2015-03-15T18:51:36+00:00</dc:date>
        <dc:creator>orl</dc:creator>
        <title>doc:openvpn</title>
        <link>https://nixsrv.com/doc/openvpn?rev=1426445496&amp;do=diff</link>
        <description>OpenVPN configuration examples

@OPENVPN
    server.conf
        ;local a.b.c.d
        port 1194
        ;proto tcp
        proto udp
        ;dev tap
        dev tun-openvpn
        dev-type tun
        ;dev-node MyTap
        ca ca.crt
        cert openvpn-server.crt
        key openvpn-server.key
        dh dh2048.pem
        server 10.13.0.0 255.255.255.0
        ifconfig-pool-persist ipp.txt
        ;server-bridge 10.8.0.4 255.255.255.0 10.8.0.50 10.8.0.100
        ;server-bridge
        p…</description>
    </item>
    <item rdf:about="https://nixsrv.com/doc/sqlite?rev=1426445328&amp;do=diff">
        <dc:format>text/html</dc:format>
        <dc:date>2015-03-15T18:48:48+00:00</dc:date>
        <dc:creator>orl</dc:creator>
        <title>doc:sqlite - created</title>
        <link>https://nixsrv.com/doc/sqlite?rev=1426445328&amp;do=diff</link>
        <description>sqlite cheatsheet

create table movies
      (name, reviews, rating, dvds, earnings, boxoffice, date, month);
.separator ,
.import movies.csv movies
select distinct count(*) from movies;
select distinct * from movies order by rating;
select distinct * from movies where month = 'Jan';  -- then Feb, etc.
select distinct avg(reviews) from movies;
select distinct sum(earnings) from movies order by earnings desc limit 20;</description>
    </item>
    <item rdf:about="https://nixsrv.com/doc/diskless_ubuntu?rev=1426445220&amp;do=diff">
        <dc:format>text/html</dc:format>
        <dc:date>2015-03-15T18:47:00+00:00</dc:date>
        <dc:creator>orl</dc:creator>
        <title>doc:diskless_ubuntu</title>
        <link>https://nixsrv.com/doc/diskless_ubuntu?rev=1426445220&amp;do=diff</link>
        <description>Diskless worstations on Ubuntu 14.04 howto

@test_setup
    network: 10.1.1.0/24
    server
        ip a s | grep inet
            inet 10.1.1.2/24 brd 10.1.1.255 scope global eth1
        cat /etc/lsb-release  | grep DESC
            DISTRIB_DESCRIPTION=&quot;Ubuntu 12.04.5 LTS&quot;
    client
        cat /etc/lsb-release | grep DESC
            DISTRIB_DESCRIPTION=&quot;Ubuntu 14.04.1 LTS&quot;
        ip a s | grep inet
            inet 10.1.1.2/24 brd 10.1.1.255 scope global eth1
@server
    @required_packages…</description>
    </item>
    <item rdf:about="https://nixsrv.com/doc/vimrc?rev=1426445103&amp;do=diff">
        <dc:format>text/html</dc:format>
        <dc:date>2015-03-15T18:45:03+00:00</dc:date>
        <dc:creator>orl</dc:creator>
        <title>doc:vimrc</title>
        <link>https://nixsrv.com/doc/vimrc?rev=1426445103&amp;do=diff</link>
        <description>.vimrc

.vimrc

set nocp
syntax enable
set expandtab
set tabstop=4
set shiftwidth=4
colorscheme github
set autoindent
set incsearch
set foldlevel=0
set foldnestmax=1
set foldmethod=indent
set foldignore=
set foldminlines=0
set foldignore=
set nowrap
set ft=python
&quot;set keymap=russian-jcukenwin
set langmap=ФИСВУАПРШОЛДЬТЩЗЙКЫЕГМЦЧНЯЖ;ABCDEFGHIJKLMNOPQRSTUVWXYZ:,фисвуапршолдьтщзйкыегмцчня;abcdefghijklmnopqrstuvwxyz
set nu!
set hidden</description>
    </item>
    <item rdf:about="https://nixsrv.com/doc/email_notify_login?rev=1426444968&amp;do=diff">
        <dc:format>text/html</dc:format>
        <dc:date>2015-03-15T18:42:48+00:00</dc:date>
        <dc:creator>orl</dc:creator>
        <title>doc:email_notify_login - created</title>
        <link>https://nixsrv.com/doc/email_notify_login?rev=1426444968&amp;do=diff</link>
        <description>Email notification about all sucessful logins using rsyslog

#send all login attemps to email
#set up postfix to send encrypted email
    vim /etc/postfix/main.cf
        #setup tls encryption
        smtp_tls_security_level = encrypt
        smtp_use_tls = yes
        smtp_tls_policy_maps = hash:/etc/postfix/tls_policy
    vim /etc/postfix/tls_policy
        google.com encrypt
        .google.com encrypt
        gmail.com encrypt
        .gmail.com encrypt
    postmap tls_policy
    service pos…</description>
    </item>
    <item rdf:about="https://nixsrv.com/doc/selinux?rev=1426444831&amp;do=diff">
        <dc:format>text/html</dc:format>
        <dc:date>2015-03-15T18:40:31+00:00</dc:date>
        <dc:creator>orl</dc:creator>
        <title>doc:selinux</title>
        <link>https://nixsrv.com/doc/selinux?rev=1426444831&amp;do=diff</link>
        <description>Basic rule setup

    getenforce
    setenforce
    #naive policy generation
        cd /etc/selinux/targeted/modules/active
        audit2allow -M php-fpm &lt; /var/log/audit/audit.log
        semodule -i php-fpm.pp
    ps -Z
    ls -Z
    chcon -v --type=httpd_sys_content_t /var/www
    chcon -v --type=httpd_sys_content_t /var/www/test.php
    cd /etc/selinux/targeted/modules/active
        mkdir custom
        audit2allow -M php-fpm &lt; /var/log/audit/audit.log
        vim php-fpm.te
        check…</description>
    </item>
    <item rdf:about="https://nixsrv.com/doc/lxc?rev=1426444682&amp;do=diff">
        <dc:format>text/html</dc:format>
        <dc:date>2015-03-15T18:38:02+00:00</dc:date>
        <dc:creator>orl</dc:creator>
        <title>doc:lxc</title>
        <link>https://nixsrv.com/doc/lxc?rev=1426444682&amp;do=diff</link>
        <description>Cheatsheet

#install under normal user
    sudo aptitude install lxc
    mkdir -p ~/.config/lxc
    echo &quot;lxc.id_map = u 0 100000 65536&quot; &gt; ~/.config/lxc/default.conf
    echo &quot;lxc.id_map = g 0 100000 65536&quot; &gt;&gt; ~/.config/lxc/default.conf
    echo &quot;lxc.network.type = veth&quot; &gt;&gt; ~/.config/lxc/default.conf
    echo &quot;lxc.network.link = lxcbr0&quot; &gt;&gt; ~/.config/lxc/default.conf
    echo &quot;$USER veth lxcbr0 2&quot; | sudo tee -a /etc/lxc/lxc-usernet
#usage
    lxc-create --template download --name test1 -- --list
…</description>
    </item>
    <item rdf:about="https://nixsrv.com/doc/chef?rev=1426444165&amp;do=diff">
        <dc:format>text/html</dc:format>
        <dc:date>2015-03-15T18:29:25+00:00</dc:date>
        <dc:creator>orl</dc:creator>
        <title>doc:chef</title>
        <link>https://nixsrv.com/doc/chef?rev=1426444165&amp;do=diff</link>
        <description>Chef cheatsheet

Chef overview

#resources
    A resource is a statement of configuration policy that:
        Describes the desired state for an item
        Declares the steps needed to bring that item to the desired state
        Specifies a resource type—such as package, template, or service
        Lists additional details (also known as attributes), if necessary
        Tells the chef-client which action to take
    Resources are grouped into recipes, which describe working configurations.…</description>
    </item>
</rdf:RDF>
