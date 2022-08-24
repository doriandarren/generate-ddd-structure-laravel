## About Project

Generate basic folder structure in hexagonal/ddd architecture for Laravel

```sh
composer require infinito/generate-ddd-structure-laravel
```



Folder structure

```sh

- Application

- Domain
    |
    - Exeptions

- Infrastucture
    |
    - Controllers
    |
    - Routes
    |
    - Services

```



Important: the "src" folder must be created in the project. Example: ProjectName/src


To implement class or method

```sh
class ClassName {
    public function methodName($bounded='Bounded', $className='User'){
        $generator = new \Infinito\GenerateDDDStructure\StructureGenerator();
        $generator->create($bounded, $className);
    }
}
```


Execute

Line command

```sh
php example/index.php Bounded User
```

or 

```sh
(new ClassName())->methodName();
```


