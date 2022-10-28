<?php
namespace App\Entity;



use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity()
 * @ORM\Table("staff_member")
 */
class StaffMember
{
    /**
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @var int
     */
    protected $id;
    /**
     * @ORM\Column(name="name", length=255)
     * @var string
     */
    protected $name;
    /**
     * @ORM\Column(name="email", length=255)
     * @var string
     */
    protected $email;
    /**
     * @ORM\Column(name="hip_chat_identifier", length=255, nullable=true)
     * @var string
     */
    protected $SlackIdentifier;

    /**
     * @ORM\OneToMany(targetEntity="CoffeeBreakPreference", mappedBy="requestedBy", cascade={"all"})
     * @var ArrayCollection
     */
    protected $preferences;

    /**
     * @var OfficeTeam $team
     *
     * @ORM\ManyToOne(targetEntity="OfficeTeam", inversedBy="teamMembers")
     */
    protected $team;



    public function __construct()
    {
        $this->preferences = new ArrayCollection();
    }
    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }
    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }
    /**
     * @param string $email
     */
    public function setEmail(string $email)
    {
        $this->email = $email;
    }
    /**
     * @return string
     */
    public function getSlackIdentifier()
    {
        return $this->SlackIdentifier;
    }
    /**
     * @param string $SlackIdentifier
     */
    public function setSlackIdentifier(string $SlackIdentifier = null)
    {
        $this->SlackIdentifier = $SlackIdentifier;
    }
    /**
     * @return ArrayCollection
     */
    public function getPreferences()
    {
        return $this->preferences;
    }
    /**
     * @param ArrayCollection $preferences
     */
    public function setPreferences($preferences)
    {
        $this->preferences = $preferences;
    }

    public function setTeam(OfficeTeam $team){
        $this->team = $team;
        return $this;
    }

    public function getTeam(){
        return $this->team;
    }

}
