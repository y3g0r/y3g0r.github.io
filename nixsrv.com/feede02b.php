<?xml version="1.0" encoding="utf-8"?>
<!-- generator="FeedCreator 1.7.2-ppt DokuWiki" -->
<?xml-stylesheet href="https://nixsrv.com/lib/exe/css.php?s=feed" type="text/css"?>
<rdf:RDF
    xmlns="http://purl.org/rss/1.0/"
    xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
    xmlns:slash="http://purl.org/rss/1.0/modules/slash/"
    xmlns:dc="http://purl.org/dc/elements/1.1/">
    <channel rdf:about="https://nixsrv.com/feed.php">
        <title>*nix spellbook shell</title>
        <description></description>
        <link>https://nixsrv.com/</link>
        <image rdf:resource="https://nixsrv.com/lib/tpl/vector/images/favicon.ico" />
       <dc:date>2015-04-11T09:07:40+00:00</dc:date>
        <items>
            <rdf:Seq>
                <rdf:li rdf:resource="https://nixsrv.com/shell/256colors?rev=1338992012&amp;do=diff"/>
                <rdf:li rdf:resource="https://nixsrv.com/shell/bash?rev=1416134748&amp;do=diff"/>
                <rdf:li rdf:resource="https://nixsrv.com/shell/command_list?rev=1338824404&amp;do=diff"/>
                <rdf:li rdf:resource="https://nixsrv.com/shell/filters?rev=1343225774&amp;do=diff"/>
                <rdf:li rdf:resource="https://nixsrv.com/shell/man_colors?rev=1338543206&amp;do=diff"/>
                <rdf:li rdf:resource="https://nixsrv.com/shell/screen?rev=1345662255&amp;do=diff"/>
                <rdf:li rdf:resource="https://nixsrv.com/shell/spellbook?rev=1338540536&amp;do=diff"/>
                <rdf:li rdf:resource="https://nixsrv.com/shell/tmux?rev=1415048548&amp;do=diff"/>
            </rdf:Seq>
        </items>
    </channel>
    <image rdf:about="https://nixsrv.com/lib/tpl/vector/images/favicon.ico">
        <title>*nix spellbook</title>
        <link>https://nixsrv.com/</link>
        <url>https://nixsrv.com/lib/tpl/vector/images/favicon.ico</url>
    </image>
    <item rdf:about="https://nixsrv.com/shell/256colors?rev=1338992012&amp;do=diff">
        <dc:format>text/html</dc:format>
        <dc:date>2012-06-06T14:13:32+00:00</dc:date>
        <title>shell:256colors</title>
        <link>https://nixsrv.com/shell/256colors?rev=1338992012&amp;do=diff</link>
        <description>Setting 256 colors in screen and vim

~/.screenrc

# terminfo and termcap for nice 256 color terminal
# allow bold colors - necessary for some reason
attrcolor b &quot;.I&quot;
# tell screen how to set colors. AB = background, AF=foreground
termcapinfo xterm 'Co#256:AB=\E[48;5;%dm:AF=\E[38;5;%dm'</description>
    </item>
    <item rdf:about="https://nixsrv.com/shell/bash?rev=1416134748&amp;do=diff">
        <dc:format>text/html</dc:format>
        <dc:date>2014-11-16T10:45:48+00:00</dc:date>
        <title>shell:bash</title>
        <link>https://nixsrv.com/shell/bash?rev=1416134748&amp;do=diff</link>
        <description>Bash

Our beloved shell, we use and abuse it every day. There are several general tips which will help you to work with without accidentally jeopardizing your box.

sh cheatsheet

Control Operators:
    &amp; &amp;&amp; ( ) ; ;; | || &lt;newline&gt;
Redirection Operators:
    &lt; &gt; &gt;| &lt;&lt; &gt;&gt; &lt;&amp; &gt;&amp; &lt;&lt;- &lt;&gt;
Reserved Words:
    !     elif    fi      while   case
    else  for     then    {       }
    do    done    until   if      esac
Quoting:
    &quot;    '    \
Special Parameters:
    * @ # ? - $ ! 0
Grouping Commands To…</description>
    </item>
    <item rdf:about="https://nixsrv.com/shell/command_list?rev=1338824404&amp;do=diff">
        <dc:format>text/html</dc:format>
        <dc:date>2012-06-04T15:40:04+00:00</dc:date>
        <title>shell:command_list</title>
        <link>https://nixsrv.com/shell/command_list?rev=1338824404&amp;do=diff</link>
        <description>List of *nix commands

:            # null command, http://linux.die.net/man/1/colon</description>
    </item>
    <item rdf:about="https://nixsrv.com/shell/filters?rev=1343225774&amp;do=diff">
        <dc:format>text/html</dc:format>
        <dc:date>2012-07-25T14:16:14+00:00</dc:date>
        <title>shell:filters</title>
        <link>https://nixsrv.com/shell/filters?rev=1343225774&amp;do=diff</link>
        <description>perl -nle 'print $1 if /(p5-.*)-[0-9]+\.[0-9]+/' pkg.tmp &gt; pkg1.tmp</description>
    </item>
    <item rdf:about="https://nixsrv.com/shell/man_colors?rev=1338543206&amp;do=diff">
        <dc:format>text/html</dc:format>
        <dc:date>2012-06-01T09:33:26+00:00</dc:date>
        <title>shell:man_colors</title>
        <link>https://nixsrv.com/shell/man_colors?rev=1338543206&amp;do=diff</link>
        <description>Specify custom man colors

# Less Colors for Man Pages
# put in .bashrc os similar
export LESS_TERMCAP_mb=$'\E[01;31m'       # begin blinking
export LESS_TERMCAP_md=$'\E[01;38;5;74m'  # begin bold
export LESS_TERMCAP_me=$'\E[0m'           # end mode
export LESS_TERMCAP_se=$'\E[0m'           # end standout-mode
export LESS_TERMCAP_so=$'\E[38;5;246m'    # begin standout-mode - info box
export LESS_TERMCAP_ue=$'\E[0m'           # end underline
export LESS_TERMCAP_us=$'\E[04;38;5;146m' # begin under…</description>
    </item>
    <item rdf:about="https://nixsrv.com/shell/screen?rev=1345662255&amp;do=diff">
        <dc:format>text/html</dc:format>
        <dc:date>2012-08-22T19:04:15+00:00</dc:date>
        <title>shell:screen</title>
        <link>https://nixsrv.com/shell/screen?rev=1345662255&amp;do=diff</link>
        <description>GNU Screen

# when root screen is launched like this, it allows to use 256 colors in second screen somehow
alias screen='TERM=xterm screen -O'
# you need to go deeper! that is, launch screen inside a screen
STY='' TERM=xterm screen -c /home/orl/hometemplate/.screenrc -O</description>
    </item>
    <item rdf:about="https://nixsrv.com/shell/spellbook?rev=1338540536&amp;do=diff">
        <dc:format>text/html</dc:format>
        <dc:date>2012-06-01T08:48:56+00:00</dc:date>
        <title>shell:spellbook</title>
        <link>https://nixsrv.com/shell/spellbook?rev=1338540536&amp;do=diff</link>
        <description>Sorted list of different commands

/etc/sysctl.d/disableipv6.conf ; echo net.ipv6.conf.all.disable_ipv6=1 &gt; /etc/sysctl.d/disableipv6.conf
/usr/bin/kvm -monitor unix:/var/run/qemu-server/406.mon,server,nowait -vnc unix:/var/run/qemu-server/406.vnc,password -pidfile /var/run/qemu-server/406.pid -daemonize -usbdevice tablet -name foobar -smp sockets=1,cores=1 -nodefaults -boot menu=on,order=cad -vga cirrus -tdf -drive file=/dev/cdrom,if=ide,index=2,media=cdrom -drive file=/dev/vm/vm-406-disk-1,if=…</description>
    </item>
    <item rdf:about="https://nixsrv.com/shell/tmux?rev=1415048548&amp;do=diff">
        <dc:format>text/html</dc:format>
        <dc:date>2014-11-03T21:02:28+00:00</dc:date>
        <title>shell:tmux</title>
        <link>https://nixsrv.com/shell/tmux?rev=1415048548&amp;do=diff</link>
        <description>Sample configuration

#key bindings
setw -g mode-keys vi
unbind C-b
set -g prefix C-a
bind C-a send-prefix
bind-key -n C-k copy-mode -u
bind-key -n M-i previous-window
bind-key -n M-o next-window
bind-key -n M-v new-window
set -g history-limit 10000
bind-key -t vi-copy 'v' begin-selection
bind-key -t vi-copy 'y' copy-selection
bind -n C-k copy-mode \; send PPage
bind -n C-j send PgDn

# pane movement
bind h select-pane -L
bind j select-pane -D
bind k select-pane -U
bind l select-pane -R

## set …</description>
    </item>
</rdf:RDF>
