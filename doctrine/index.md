# Doctrine


## Doctrine Query Language


1. How to get all resume tags that match vacancy tags: 


```php
public function getVacancyByUserResume(Resume $resume)
    {
        $qb = $this->repository->createQueryBuilder('vacancy');
        
        $qb->where(
            $qb->expr()->isMemberOf(':tags', 'vacancy.tags')
        )->setParameter('tags', $resume->getTags());
        
        $qb->setMaxResults(1);
        
        return $qb->getQuery()->getOneOrNullResult();
    }
```

