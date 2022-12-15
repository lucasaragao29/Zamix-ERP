select nome_prod_prod and nome_prod_comp and preco_compra and  (preco_custo* quantidade)
quantidade and data_retirada =< yyyy/mm/dd and data_retirada >= yyyy/mm/dd 
from produtos p
inner join produto_composto pc on pc.id=p.id;
(select nome_prod_prod,nome_prod_comp,preco_compra,
preco_venda,quantidade from produtos p
inner join produto_composto pc on pc.id=p.id
inner join estoque e on e.id=p.id)