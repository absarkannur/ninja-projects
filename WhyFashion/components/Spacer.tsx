import { View } from 'react-native'

interface StateProps{
    gap?: number | null
}

const Spacer = ({ gap }: StateProps ) => {
    return (
        <View style={{ height: gap }} />
    )
}

export default Spacer