select nome_prod_prod and nome_prod_comp and preco_compra and preco_venda and quantidade
 data_entrada =< yyyy/mm/dd and data_entrada >= yyyy/mm/dd 
from produtos p
inner join produto_composto pc on pc.id=p.id;
(select nome_prod_prod,nome_prod_comp,preco_compra,preco_venda,quantidade from produtos p
inner join produto_composto pc on pc.id=p.id
inner join requisicao r on r.id=p.id
inner join estoque e on e.id=p.id)