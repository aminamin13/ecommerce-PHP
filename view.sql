CREATE OR REPLACE VIEW  items1view AS
SELECT items.* , categories.* FROM items 
INNER JOIN  categories on  items.items_cat = categories.categories_id ; 


select items1view.*, 1 as favorite from items1view
inner JOIN favorite on favorite.favorite_itemsid = items1view.items_id And favorite.favorite_usersid =$userid
Where categories_id = $catergoryid
UNION ALL
select *, 0 as favorite from items1view
where categories_id = $catergoryid and items_id != (select items1view.items_id as favorite from items1view
inner JOIN favorite on favorite.favorite_itemsid = items1view.items_id And favorite.favorite_usersid =$userid)



Create or REPLACE view myfavorite as SELECT favorite.* , items.* , users.users_id FROM favorite 
INNER JOIN users ON users.users_id  = favorite.favorite_usersid
INNER JOIN items ON items.items_id  = favorite.favorite_itemsid