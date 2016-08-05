<?xml version="1.0" encoding="utf-8"?>
<!-- generator="FeedCreator 1.7.2-ppt DokuWiki" -->
<?xml-stylesheet href="https://nixsrv.com/lib/exe/css.php?s=feed" type="text/css"?>
<rdf:RDF
    xmlns="http://purl.org/rss/1.0/"
    xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
    xmlns:slash="http://purl.org/rss/1.0/modules/slash/"
    xmlns:dc="http://purl.org/dc/elements/1.1/">
    <channel rdf:about="https://nixsrv.com/feed.php">
        <title>*nix spellbook py</title>
        <description></description>
        <link>https://nixsrv.com/</link>
        <image rdf:resource="https://nixsrv.com/lib/tpl/vector/images/favicon.ico" />
       <dc:date>2015-04-11T09:07:59+00:00</dc:date>
        <items>
            <rdf:Seq>
                <rdf:li rdf:resource="https://nixsrv.com/py/classes?rev=1345647013&amp;do=diff"/>
                <rdf:li rdf:resource="https://nixsrv.com/py/dictionaries?rev=1338974683&amp;do=diff"/>
                <rdf:li rdf:resource="https://nixsrv.com/py/main?rev=1338974651&amp;do=diff"/>
                <rdf:li rdf:resource="https://nixsrv.com/py/symbols?rev=1345647233&amp;do=diff"/>
            </rdf:Seq>
        </items>
    </channel>
    <image rdf:about="https://nixsrv.com/lib/tpl/vector/images/favicon.ico">
        <title>*nix spellbook</title>
        <link>https://nixsrv.com/</link>
        <url>https://nixsrv.com/lib/tpl/vector/images/favicon.ico</url>
    </image>
    <item rdf:about="https://nixsrv.com/py/classes?rev=1345647013&amp;do=diff">
        <dc:format>text/html</dc:format>
        <dc:date>2012-08-22T14:50:13+00:00</dc:date>
        <title>py:classes</title>
        <link>https://nixsrv.com/py/classes?rev=1345647013&amp;do=diff</link>
        <description>Scopes and namespaces
    namespace -- mapping from names to objects
    attribute -- anything after a dot
        read only or writable
        =, del
    local namespace
        created on invocation, deleted on return
    scope
        textual region of python where a namespace is directly accessible
            unqualified reference to name
    determined statically, used dymaically
    three nested scopes
        innermost -- local names
        scope of any enclosing functions
        next…</description>
    </item>
    <item rdf:about="https://nixsrv.com/py/dictionaries?rev=1338974683&amp;do=diff">
        <dc:format>text/html</dc:format>
        <dc:date>2012-06-06T09:24:43+00:00</dc:date>
        <title>py:dictionaries</title>
        <link>https://nixsrv.com/py/dictionaries?rev=1338974683&amp;do=diff</link>
        <description>Dictionaries

#### Making a dictionary ####
data = {}
# OR #
data = dict()

#### Initially adding values ####
data = {'a':1,'b':2,'c':3}
# OR #
data = dict(a=1, b=2, c=3)

#### Inserting/Updating value ####
data['a']=1  # updates if 'a' exists, else adds 'a'
# OR #
data.update({'a':1})
# OR #
data.update(dict(a=1))

#### Merging 2 dictionaries ####
data.update(data2)  # Where data2 is also a dict.</description>
    </item>
    <item rdf:about="https://nixsrv.com/py/main?rev=1338974651&amp;do=diff">
        <dc:format>text/html</dc:format>
        <dc:date>2012-06-06T09:24:11+00:00</dc:date>
        <title>py:main</title>
        <link>https://nixsrv.com/py/main?rev=1338974651&amp;do=diff</link>
        <description>main()

def main():
    &quot;&quot;&quot;Main function, calls all other ones&quot;&quot;&quot;

    if len(sys.argv) &lt; 2:
        sys.exit('Usage: %s &lt;action&gt; (check|restore)' % sys.argv[0])

    action = sys.argv[1]

    print &quot;Executing action: %r&quot; % action

    if action == &quot;check&quot;:
        try:
            conf=read_conf()
            check_conf(conf)
            do_stuff(conf)
        except Exception, e:
            cleanup(conf)
            sys.exit(&quot;Exception: %r&quot; % e)
    elif action == &quot;restore&quot;:
        try:
    …</description>
    </item>
    <item rdf:about="https://nixsrv.com/py/symbols?rev=1345647233&amp;do=diff">
        <dc:format>text/html</dc:format>
        <dc:date>2012-08-22T14:53:53+00:00</dc:date>
        <title>py:symbols</title>
        <link>https://nixsrv.com/py/symbols?rev=1345647233&amp;do=diff</link>
        <description>Таблица слов и символов в питоне

#-- coding UTF-8 --
=               # присваивание
+=              # прибавить и присвоить
+               # сложение
-               # вычитание
*               # умножение
/               # деление
'               # одинарная кавычка
&quot;               # двойная кавычка
&quot;&quot;&quot;             # распечатать все, что внутри
,               # разделитель параметров
%               # форматтер
%s              # строка
%r              # преобразовать в строку
%d             …</description>
    </item>
</rdf:RDF>
