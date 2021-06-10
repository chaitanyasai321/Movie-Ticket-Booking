#include<bits/stdc++.h>
using namespace std;
int main()
{
	int t;
	cin>>t;
	for(int i=0;i<t;i++)
	{
		int w1,w2,x1,x2,m;
		cin>>w1>>w2>>x1>>x2>>m;
		int m1= x1*m;
		int m2=x2*m;
		int q=w2-w1;
		if(q>=m1 and q<=m2)
			cout<<1;
		else
			cout<<0;
		if(i!=t)
			cout<<"\n";
	}
}