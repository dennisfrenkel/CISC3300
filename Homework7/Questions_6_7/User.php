class User {
    private $name;
    private $email;
    private $age;

    public function __construct($name, $email, $age) {
        $this->name = $name;
        $this->email = $email;
        $this->age = $age;
    }
    public function getName(): string {
        return $this->name;
    }
    public function getEmail(): string {
        return $this->email;
    }
    public function getAge(): int {
        return $this->age;
    }
    public function setName(string $name): void {
        $this->name = $name;
    }
    public function setEmail(string $email): void {
        $this->email = $email;
    }
    public function setAge(int $age): void {
        $this->age = $age;
    }
    public static function createUser(string $name, string $email, int $age): User {
        return new self($name, $email, $age);
    }
}
