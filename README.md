# POO_wcs

Énoncé :

1.

Créer une classe abstraite HighWay possédant les propriétés suivantes : 

currentVehicles (array), nbLane (int) et maxSpeed (int), ainsi que les getters et setters correspondants, dont héritent les classes finales MotorWay (4 voies, 130km/h), PedestrianWay (1 voie, 10km/h)et ResidentialWay (2 voies, 50km/h).

La classe HighWay possède une méthode abstraite addVehicule() prenant en paramètre un objet de type Vehicle. Chaque classe fille devra implémenter la méthode pour qu’elle ajoute le véhicule au tableau $currentVehicules, uniquement si ce dernier est autorisé sur ce type de voie. Ainsi, pour MotorWay, addVehicule($car) ajoutera bien une voiture au tableau, tandis que addVehicule($bike) ne le fera pas, car il n’est pas possible de rouler en vélo sur une autoroute. Les règles attendues sont les suivantes: 
2.

motorway : tout type de voiture
3.

ResidentialWay : tout type de véhicule
4.

PedestrianWay : Bike et Skateboard uniquement

> Astuce : tu peux t’aider de la fonction PHP instanceof() pour t’aider à déterminer le type de véhicule qui est mis en paramètre de la méthode addVehicule().
Critères de validation :

•

Les classes HighWay (abstraites) et MotorWay, PedestrianWay, ResidentialWay (finales) sont toutes les quatres créées, l’héritage et les propriétés/méthodes attendues sont présentes, ainsi que les valeurs par défaut.
•

La classe HighWay possède une seule méthode abstraite, addVehicle(), implémentée de manière différente dans chacune de ses classes filles, en fonction des types de véhicules autorisés.
