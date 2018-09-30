void del_node( int n)
{
node *temp, *parent=NULL, *father, *r, *son;
temp= root;
while((temp-&gt;data!=n) &amp;&amp; (temp!=NULL))
{
if(n&lt;temp-&gt;data)
{
parent=temp;
temp=temp-&gt;left;
}
else
{
parent=temp;
temp=temp-&gt;right;
}
}
if(temp==NULL)
{
printf(&quot;Number not found&quot;);
return;
}
if(temp-&gt;left == NULL)
r=temp-&gt;right;
else
if(temp-&gt;right==NULL)
r=temp-&gt;left;
else
{
father=temp;
r=temp-&gt;right;
son=r-&gt;left;
while(son !=NULL)
{
father = r ; r = son ; son = r-&gt; left;
}
if (father != temp)
{
father -&gt; left = r -&gt; right
