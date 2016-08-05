<?xml version="1.0" encoding="utf-8"?>
<!-- generator="FeedCreator 1.7.2-ppt DokuWiki" -->
<?xml-stylesheet href="https://nixsrv.com/lib/exe/css.php?s=feed" type="text/css"?>
<rdf:RDF
    xmlns="http://purl.org/rss/1.0/"
    xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
    xmlns:slash="http://purl.org/rss/1.0/modules/slash/"
    xmlns:dc="http://purl.org/dc/elements/1.1/">
    <channel rdf:about="https://nixsrv.com/feed.php">
        <title>*nix spellbook scripts</title>
        <description></description>
        <link>https://nixsrv.com/</link>
        <image rdf:resource="https://nixsrv.com/lib/tpl/vector/images/favicon.ico" />
       <dc:date>2015-04-11T09:08:08+00:00</dc:date>
        <items>
            <rdf:Seq>
                <rdf:li rdf:resource="https://nixsrv.com/scripts/cputime_total?rev=1415048791&amp;do=diff"/>
                <rdf:li rdf:resource="https://nixsrv.com/scripts/launcher?rev=1415048646&amp;do=diff"/>
                <rdf:li rdf:resource="https://nixsrv.com/scripts/p2v?rev=1338556350&amp;do=diff"/>
                <rdf:li rdf:resource="https://nixsrv.com/scripts/rsync_backup?rev=1415049868&amp;do=diff"/>
                <rdf:li rdf:resource="https://nixsrv.com/scripts/vim_keymap?rev=1343429464&amp;do=diff"/>
                <rdf:li rdf:resource="https://nixsrv.com/scripts/vm_console?rev=1338556646&amp;do=diff"/>
            </rdf:Seq>
        </items>
    </channel>
    <image rdf:about="https://nixsrv.com/lib/tpl/vector/images/favicon.ico">
        <title>*nix spellbook</title>
        <link>https://nixsrv.com/</link>
        <url>https://nixsrv.com/lib/tpl/vector/images/favicon.ico</url>
    </image>
    <item rdf:about="https://nixsrv.com/scripts/cputime_total?rev=1415048791&amp;do=diff">
        <dc:format>text/html</dc:format>
        <dc:date>2014-11-03T21:06:31+00:00</dc:date>
        <title>scripts:cputime_total</title>
        <link>https://nixsrv.com/scripts/cputime_total?rev=1415048791&amp;do=diff</link>
        <description>Simple script to sum CPUTIME of group of processes

Not that it can't be done in 1 line of awk...

#!/usr/bin/perl

@output = `top -b -n 1`;
#print $output;
#print &lt;STDIN&gt;;

print &quot;CPUTIME total for proccesess: &quot;;
foreach $argnum (0 .. $#ARGV) {
    print &quot;$ARGV[$argnum] &quot;;
}
print &quot;\nPROCESS      TOTAL, sec\n&quot;;

sub total() {
    $time_sum = 0;
    foreach (@grep_proc)
    {
        $line = $_;
        $line =~ s!^\s+!!;
        @field = split /\s+/, $line;
        @time_field = split /[:]/, $f…</description>
    </item>
    <item rdf:about="https://nixsrv.com/scripts/launcher?rev=1415048646&amp;do=diff">
        <dc:format>text/html</dc:format>
        <dc:date>2014-11-03T21:04:06+00:00</dc:date>
        <title>scripts:launcher</title>
        <link>https://nixsrv.com/scripts/launcher?rev=1415048646&amp;do=diff</link>
        <description>Simple launcher to allow logging of all scripts run via cron

#!/bin/bash

# Usage: launcher user /etc/opt/script

if id $1 | grep uid &gt; /dev/null ; then
        date_time=$(/bin/date +%Y-%m-%d\:%H:%M)
        echo | tee -a /var/log/launcher/$(basename $2).log;
        echo $date_time - starting script run... | tee -a /var/log/launcher/$(basename $2).log;
        su -l $1 -c $2 2&gt;&amp;1 | tee -a /var/log/launcher/$(basename $2).log;
        if (( ${PIPESTATUS[0]} == 0 )); then
                echo $…</description>
    </item>
    <item rdf:about="https://nixsrv.com/scripts/p2v?rev=1338556350&amp;do=diff">
        <dc:format>text/html</dc:format>
        <dc:date>2012-06-01T13:12:30+00:00</dc:date>
        <title>scripts:p2v</title>
        <link>https://nixsrv.com/scripts/p2v?rev=1338556350&amp;do=diff</link>
        <description>p2v

This is a small script which performs automated dump of a server and restores this dump on a selected partition. I wrote it to automate cloning servers to virtual machines.

github

&lt;https://github.com/sistemshik/p2v&gt;

How it looks like

virt_server&gt; p2v.py foo full
WORKING WITH SERVER: 'foo'
READING CONFIG FOR 'foo'
CHECKING LOCAL CONFIG
CHECKING LOCAL CONFIG FOR 'foo' COMPLETED SUCCESSFULLY
CHECKING REMOTE CONFIG
CHECKING NODUMP FLAG: &quot;lsattr -d /home/backupman/dumps | egrep '[\\w-]+d[\\w…</description>
    </item>
    <item rdf:about="https://nixsrv.com/scripts/rsync_backup?rev=1415049868&amp;do=diff">
        <dc:format>text/html</dc:format>
        <dc:date>2014-11-03T21:24:28+00:00</dc:date>
        <title>scripts:rsync_backup</title>
        <link>https://nixsrv.com/scripts/rsync_backup?rev=1415049868&amp;do=diff</link>
        <description>Simple backup script with rsync

#!/bin/bash
# ----------------------------------------------------------------------
# mikes handy rotating-filesystem-snapshot utility
# with heavy modifications by orl
# ----------------------------------------------------------------------
# this needs to be a lot more general, but the basic idea is it makes
# rotating backup-snapshots of $bak whenever called
# ----------------------------------------------------------------------
set -x
set -e

unset PATH    …</description>
    </item>
    <item rdf:about="https://nixsrv.com/scripts/vim_keymap?rev=1343429464&amp;do=diff">
        <dc:format>text/html</dc:format>
        <dc:date>2012-07-27T22:51:04+00:00</dc:date>
        <title>scripts:vim_keymap</title>
        <link>https://nixsrv.com/scripts/vim_keymap?rev=1343429464&amp;do=diff</link>
        <description>Maps alt+h,j,k,l to cursor movement. Ugly.

Much more sane solution will be using autokey program: &lt;http://code.google.com/p/autokey/&gt;

~/.xbindkeysrc

&quot;xbindkeys_show&quot;
   control+shift+0

# set directly keycode (here control + f with my keyboard)

#up
&quot;~/profile/macro/_play up&quot;
    m:0x8 + c:45
    Alt + k

#down
&quot;~/profile/macro/_play down&quot;
    m:0x8 + c:44
    Alt_L

#left
&quot;~/profile/macro/_play left&quot;
    m:0x8 + c:43
    Alt_L

#right
&quot;~/profile/macro/_play right&quot;
    m:0x8 + c:46
    Alt_L
…</description>
    </item>
    <item rdf:about="https://nixsrv.com/scripts/vm_console?rev=1338556646&amp;do=diff">
        <dc:format>text/html</dc:format>
        <dc:date>2012-06-01T13:17:26+00:00</dc:date>
        <title>scripts:vm_console</title>
        <link>https://nixsrv.com/scripts/vm_console?rev=1338556646&amp;do=diff</link>
        <description>Script for quickly connecting to VNC consoles of running DOMu's in XEN

github

&lt;https://github.com/sistemshik/vm_console&gt;

How it looks like



What it does

It makes a page with the list of running DOMu's, when clicking on the DOMu it pops up a page with embedded java applet viewer which connects to corresponding DOMu.</description>
    </item>
</rdf:RDF>
